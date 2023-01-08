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
import {parseTimestamp} from "@/utils/dates";
import {generateRandomString, IsValidNumberBetweenOneAndHundred} from "@/utils/validator";
import {useMessagesStore} from "@/pinia/messages-store";
import {useRoomsStore} from "@/pinia/rooms-store";
import ChatGPTSvgIcon from "@/components/ChatGPTSvgIcon.vue";
import {CHAT_GPT_PROMPTS, CHAT_GPT_TEMPLATES, CHAT_STYLES, TEXT_MESSAGES} from "@/constants/chat-constants";
import {ContentType, USERS} from "@/constants/code-constants";
import {formatChatGptMessage} from "@/utils/modify-message";

register()
export default {
    name: "ChatWidget",
    components: {ChatGPTSvgIcon},
    setup() {
        const messagesStore = useMessagesStore()
        const roomsStore = useRoomsStore()
        return {messagesStore, roomsStore}
    },

    data: () => {
        return {
            styles: CHAT_STYLES,
            messages: [],
            currentRoom: '',
            currentUserId: USERS.HUMAN_USER,
            socketId: '',
            chatGptActivated: false,
            showSendIcon: false,
            Attachment: [],
            roomsLoaded: true,
            messagesLoaded: true,
            loadingRooms: false,
            showChatGPTIcon: false,
            textMessages: TEXT_MESSAGES,
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

        async getChatGptOpinion(context){

            let promptRequest = {
                Prompt: this.messages[this.messages.length - 1].content,
                Context:context
            }

            this.roomsStore.updateTypingUsers(this.currentRoom)

            await fetch(`/api/chat-gpt`,
                {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },

                    body: JSON.stringify(promptRequest),
                },
            )
                .then((response) => response.json())
                .then((data) => {

                    const chatGptAnswer = formatChatGptMessage(data,this.currentRoom)

                    this.messagesStore.setMessages(chatGptAnswer)

                    this.messages = this.messagesStore.getMessages.filter(x => x.roomId === this.currentRoom)

                    this.roomsStore.removeTypingUsers(this.currentRoom)


                });
        }

    },


    mounted() {

        this.messagesLoaded = false

        this.messages = this.messagesStore.getMessages.filter(x => x.roomId === '1');

        this.rooms = this.roomsStore.getRooms;

        this.vueAdvancedChatWebComponent = document.querySelector("vue-advanced-chat")

        //fun facts check event listener
        this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container').addEventListener('click', (e) => {

            const target = e.target.closest(".fact-check-query"); // Or any other selector.

            if (target && this.currentRoom === ContentType.FUN_FACTS) {
              this.getChatGptOpinion(CHAT_GPT_PROMPTS.FUN_FACT_CHECK)
            }

        })

        //similar fun facts event listener
        this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container').addEventListener('click', (e) => {

            const target = e.target.closest(".similar-facts-query"); // Or any other selector.

            if (target && this.currentRoom === ContentType.FUN_FACTS) {
                this.getChatGptOpinion(CHAT_GPT_PROMPTS.SIMILAR_FUN_FACT)
            }

        })

        setTimeout(() => {

            this.messagesLoaded = true

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


</style>
