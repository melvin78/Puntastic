<template>
    <vue-advanced-chat
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

        <div
           slot="custom-action-icon"
        >

            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.418 9.81782C22.97 8.18424 22.7805 6.39624 21.899 4.90895C20.5727 2.63331 17.9035 1.46298 15.3002 2.00751C14.1386 0.723395 12.4745 -0.00806027 10.728 6.70141e-05C8.06708 6.70141e-05 5.70272 1.69054 4.8789 4.18562C3.16536 4.53509 1.69072 5.59164 0.825712 7.08706C-0.508876 9.3627 -0.204063 12.2235 1.58363 14.174C1.03167 15.8076 1.22115 17.5956 2.10263 19.0748C3.42898 21.3586 6.09816 22.5289 8.70966 21.9844C9.86301 23.2685 11.5271 24.0081 13.2736 23.9999C15.9346 23.9999 18.2989 22.3095 19.1227 19.8144C20.8363 19.4649 22.3109 18.4084 23.1677 16.9129C24.5105 14.6373 24.2057 11.7765 22.418 9.82595V9.81782ZM20.5232 5.69729C21.0505 6.60755 21.2482 7.67222 21.067 8.70439C21.034 8.68 20.9681 8.6475 20.9269 8.62311L16.0828 5.85984C15.8357 5.72167 15.5309 5.72167 15.2837 5.85984L9.60763 9.0945V6.72133L14.2952 4.04745C16.4783 2.80398 19.2628 3.54356 20.5232 5.69729V5.69729ZM9.60763 10.6306L11.9967 9.26517L14.3858 10.6306V13.3532L11.9967 14.7186L9.60763 13.3532V10.6306ZM10.7198 1.56863C11.7907 1.56863 12.8205 1.93436 13.6443 2.60892C13.6114 2.62518 13.5455 2.66582 13.4961 2.6902L8.652 5.44535C8.40485 5.58351 8.25656 5.84358 8.25656 6.12804V12.5974L6.1723 11.4108V6.06302C6.1723 3.57607 8.20713 1.56863 10.728 1.56051L10.7198 1.56863ZM2.20973 7.8754C2.74521 6.96515 3.57727 6.2662 4.58233 5.90047V11.5814C4.58233 11.8659 4.73062 12.1178 4.97776 12.2641L10.6456 15.4907L8.55314 16.6854L3.87384 14.0196C1.69896 12.7762 0.949285 10.0291 2.20973 7.8754V7.8754ZM3.48665 18.3027C2.95117 17.4006 2.76169 16.3278 2.94293 15.2956C2.97588 15.32 3.04179 15.3525 3.08298 15.3769L7.92704 18.1402C8.17418 18.2783 8.47899 18.2783 8.72614 18.1402L14.394 14.9055V17.2787L9.70648 19.9444C7.52336 21.1798 4.73885 20.4483 3.47841 18.3027H3.48665ZM13.2819 22.4314C12.2191 22.4314 11.1811 22.0656 10.3655 21.3911C10.3985 21.3748 10.4726 21.3342 10.5138 21.3098L15.3579 18.5547C15.605 18.4165 15.7616 18.1564 15.7533 17.872V11.4108L17.8376 12.5974V17.937C17.8376 20.4239 15.7945 22.4395 13.2819 22.4395V22.4314ZM21.8002 16.1246C21.2647 17.0349 20.4244 17.7338 19.4276 18.0914V12.4104C19.4276 12.126 19.2793 11.8659 19.0321 11.7277L13.356 8.49308L15.4403 7.30649L20.1278 9.97224C22.3109 11.2157 23.0524 13.9627 21.7919 16.1165L21.8002 16.1246Z" fill="white"/>
            </svg>

        </div>
    </vue-advanced-chat>
</template>

<script>
import { register } from 'vue-advanced-chat'
import {parseTimestamp} from "@/utils/dates";
import {generateRandomString, IsValidNumberBetweenOneAndHundred} from "@/utils/validator";
import {useMessagesStore} from "@/pinia/messages-store";
import {useRoomsStore} from "@/pinia/rooms-store";
import {ContentType, USERS} from "@/constants/content-types";

register()
export default {
    name: "ChatWidget",
    setup() {
        const messagesStore = useMessagesStore()
        const roomsStore = useRoomsStore()

        return {messagesStore,roomsStore}
    },
    computed: {


    },



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
            typingMessageCache: '',
            currentUserId: USERS.HUMAN_USER,
            chatBotUserId: USERS.CHAT_BOT,
            funFactRoom: ContentType.FUN_FACTS,
            socketId: '',
            files: [],
            random: [],
            showSendIcon:false,
            Attachment: [],
            roomsLoaded: true,
            messagesLoaded: true,
            loadingRooms: false,
            textMessages: {
                TYPE_MESSAGE: 'Input random number between 1 and 50',
                IS_ONLINE: 'Online',
                IS_TYPING: 'is typing...'
            },
            options: {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'},
            rooms:[]

        }
    },

    methods: {
        sendMessage({content, roomId, files, replyMessage}) {


            if (IsValidNumberBetweenOneAndHundred(content)){
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
                 this.messages = this.messagesStore.getMessages.filter(x=>x.roomId===roomId)
                 this.messagesStore.getContentMessage(roomId,content).then(()=>{
                     this.roomsStore.removeTypingUsers(roomId)
                     this.messages = this.messagesStore.getMessages.filter(x=>x.roomId===roomId)
                 })


            }


        },


        async responseMessage(roomId,responseMessage){
            this.roomsStore.removeTypingUsers(roomId).then(()=>{
               this.messagesStore.setMessages(responseMessage)
            })
        },

        fetchMessages({room, options = {}}) {
            this.messagesLoaded = false
            this.messages = this.messagesStore.getMessages.filter(x => x.roomId === room.roomId)


            setTimeout(() => {
                this.messagesLoaded = true
            },1000)
        },

        sendMessageReaction({reaction, remove, messageId, roomId}) {


            this.messagesStore.updateMessageReaction(reaction, remove, messageId, roomId)
            this.messages = this.messagesStore.getMessages.filter(x => x.roomId === roomId)

        },
        typingMessage({ roomId, message}){
            // if (roomId) {
            //     if (message?.length > 1) {
            //         this.typingMessageCache = message
            //         return
            //     }
            //
            //     if (message?.length === 1 && this.typingMessageCache) {
            //         this.typingMessageCache = message
            //         return
            //     }
            //
            //     this.typingMessageCache = message
            //
            //     this.roomsStore.updateTypingUsers(roomId)
            //
            // }
           this.showSendIcon = IsValidNumberBetweenOneAndHundred(message)

        },
        openedFailedMessage({roomId, message}){

        },

        messageTemplate(val){
            return `message_${val._id}`
        }

    },


    mounted() {

        this.messagesLoaded = false
        this.messages = this.messagesStore.getMessages.filter(x => x.roomId === '1');
        this.rooms = this.roomsStore.getRooms;

        setTimeout(() => {
            this.messagesLoaded = true
        }, 1000)

    },

    created() {
        if (!window.sessionStorage.getItem('web-melvin-chat-app')){
            const randomUserId = generateRandomString()
            this.currentUserId = `${randomUserId}`
            window.sessionStorage.setItem('web-melvin-chat-app',`${randomUserId}`)
        }
        else{
            this.currentUserId = window.sessionStorage.getItem('web-melvin-chat-app')
        }


    }


}
</script>

<style scoped>

</style>
