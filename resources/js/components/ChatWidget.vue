<template>
    <vue-advanced-chat
        ref="advancedChat"
        :current-user-id="currentUserId"
        :text-messages="JSON.stringify(textMessages)"
        :height="'500px'"
        :theme="'dark'"
        :show-audio="false"
        :show-search="false"
        :show-files="false"
        :show-send-icon="showSendIcon"
        :show-add-room="false"
        :show-emojis="false"
        :styles="JSON.stringify(styles)"
        :rooms="JSON.stringify(rooms)"
        :message-actions="[]"
        :rooms-loaded="roomsLoaded"
        @open-failed-message="openedFailedMessage($event.detail[0])"
        :loading-rooms="loadingRooms"
        :messages="JSON.stringify(messages)"
        :messages-loaded="messagesLoaded"
        @send-message-reaction="sendMessageReaction($event.detail[0])"
        @fetch-messages="fetchMessages($event.detail[0])"
        @typing-message="typingMessage($event.detail[0])"
        @send-message="sendMessage($event.detail[0])"
        textarea-action-enabled="true"
    >

        <template v-if="showChatGPTIcon">
            <div slot="custom-action-icon">
                <ChatGPTSvgIcon @init-chat-gpt="chatGPT"/>
            </div>
        </template>


    </vue-advanced-chat>
</template>

<script>
import {register} from 'vue-advanced-chat'
import {nextTick} from 'vue'
import {parseTimestamp} from "@/utils/dates";
import {generateRandomString, IsValidNumberBetweenOneAndHundred} from "@/utils/validator";
import {useMessagesStore} from "@/pinia/messages-store";
import {useRoomsStore} from "@/pinia/rooms-store";
import {ContentType, USERS, CHAT_GPT_TEMPLATES} from "@/constants/content-types";
import ChatGPTSvgIcon from "@/components/ChatGPTSvgIcon.vue";

register()
export default {
    name: "ChatWidget",
    components: {ChatGPTSvgIcon},
    setup() {
        const messagesStore = useMessagesStore()
        const roomsStore = useRoomsStore()

        return {messagesStore, roomsStore}
    },
    computed: {},

    data: () => {
        return {
            styles: {
                content: {
                    background: 'url(/images/bg-icon.svg)'
                },

                sidemenu: {
                    background: 'rgba(47,52,65,0.98)',
                    backgroundHover: '#202224',
                    backgroundActive: '#063560',
                    colorActive: '#fff',
                    borderColorSearch: '#181a1b'
                },

                header: {
                    background: 'rgba(47,52,65,0.98)',
                    colorRoomName: '#fff',
                    colorRoomInfo: '#9ca6af'
                },

                footer: {
                    background: 'rgba(47,52,65,0.98)',
                    borderStyleInput: 'none',
                    borderInputSelected: '#1976d2',
                    backgroundReply: '#1b1c1c',
                    backgroundTagActive: '#1b1c1c',
                    backgroundTag: '#131415'
                },


            },
            messages: [],
            currentRoom: '',
            typingMessageCache: '',
            currentUserId: USERS.HUMAN_USER,
            chatBotUserId: USERS.CHAT_BOT,
            funFactRoom: ContentType.FUN_FACTS,
            chatGptMessage: {},
            socketId: '',
            chatGptActivated: false,
            files: [],
            random: [],
            showSendIcon: false,
            Attachment: [],
            roomsLoaded: true,
            messagesLoaded: true,
            loadingRooms: false,
            showChatGPTIcon: false,
            textMessages: {
                TYPE_MESSAGE: 'Input random number between 1 and 50',
                IS_ONLINE: 'Online',
                IS_TYPING: 'is typing...'
            },
            options: {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'},
            rooms: [],
            vueAdvancedChatWebComponent: null

        }
    },

    methods: {
        chatGPT() {

            const scrollContainerDiv = this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-container-scroll')
            const chatGptTemplate = CHAT_GPT_TEMPLATES.FUN_FACTS
            setTimeout(() => {
                const element = scrollContainerDiv
                element.classList.add('vac-scroll-smooth')
                element.scrollTo({top: element.scrollHeight, behavior: 'smooth'})
                setTimeout(() => element.classList.remove('vac-scroll-smooth'))
            }, 50)
            this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container span').insertAdjacentHTML('beforeend', chatGptTemplate)
        },

        sendMessage({content, roomId, files, replyMessage}) {


            if (IsValidNumberBetweenOneAndHundred(content)) {
                this.showChatGPTIcon = true
                this.chatGptActivated = false
                const message = {
                    _id: Math.random(),
                    content: content,
                    senderId: this.currentUserId,
                    username: 'John Doe',
                    date: parseTimestamp(new Date(), 'DD MMMM YYYY'),
                    timestamp: parseTimestamp(new Date(), 'HH:mm'),
                    system: false,
                    roomId: roomId,
                    avatar: '/images/fun-fact.png',
                    saved: true,
                    distributed: true,
                    seen: true,
                    disableActions: false,
                    disableReactions: false,


                }


                this.messagesStore.setMessages(message)
                this.roomsStore.updateTypingUsers(roomId)
                this.messages = this.messagesStore.getMessages.filter(x => x.roomId === roomId)
                this.messagesStore.getContentMessage(roomId, content).then(() => {
                    this.roomsStore.removeTypingUsers(roomId)
                    this.messages = this.messagesStore.getMessages.filter(x => x.roomId === roomId)
                })


            }


        },


        async responseMessage(roomId, responseMessage) {
            this.roomsStore.removeTypingUsers(roomId).then(() => {
                this.messagesStore.setMessages(responseMessage)
            })
        },

        fetchMessages({room, options = {}}) {
            this.messagesLoaded = false
            this.currentRoom = room.roomId
            this.messages = this.messagesStore.getMessages.filter(x => x.roomId === room.roomId)


            setTimeout(() => {
                this.messagesLoaded = true
            }, 1000)
        },

        sendMessageReaction({reaction, remove, messageId, roomId}) {

            this.messagesStore.updateMessageReaction(reaction, remove, messageId, roomId)
            this.messages = this.messagesStore.getMessages.filter(x => x.roomId === roomId)

        },
        typingMessage({roomId, message}) {
            this.showSendIcon = IsValidNumberBetweenOneAndHundred(message)
        },
        openedFailedMessage({roomId, message}) {

        },



    },


    mounted() {

        this.messagesLoaded = false
        this.messages = this.messagesStore.getMessages.filter(x => x.roomId === '1');
        this.rooms = this.roomsStore.getRooms;
        this.vueAdvancedChatWebComponent = document.querySelector("vue-advanced-chat")
        this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container').addEventListener('click', (e) => {
            const target = e.target.closest(".chat-gpt-query"); // Or any other selector.
            if (target) {
                console.log('here')
            }
        })
        setTimeout(() => {
            this.messagesLoaded = true
            console.log(document.querySelector('.vac-messages-container'))
        }, 1000)


    },

    created() {

        if (!window.sessionStorage.getItem('web-melvin-chat-app')) {
            const randomUserId = generateRandomString()
            this.currentUserId = `${randomUserId}`
            window.sessionStorage.setItem('web-melvin-chat-app', `${randomUserId}`)
        } else {
            this.currentUserId = window.sessionStorage.getItem('web-melvin-chat-app')
        }


    }


}
</script>

<style scoped>
.vac-button-content {
    display: flex;
    justify-content: center;
}

</style>
