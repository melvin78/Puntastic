<template>
    <chat-window
        :current-user-id="'1234'"
        :text-messages="textMessages"
        :height="'500px'"
        :theme="'dark'"
        :show-audio="false"
        :show-search="false"
        :show-files="false"
        :show-add-room="false"
        :styles="styles"
        :rooms="rooms"
        :message-actions="[]"
        :rooms-loaded="roomsLoaded"
        @open-failed-message="openedFailedMessage($event)"
        :loading-rooms="loadingRooms"
        :messages="messages"
        :messages-loaded="messagesLoaded"
        @send-message-reaction="sendMessageReaction($event)"
        @fetch-messages="fetchMessages"
        @typing-message="typingMessage($event)"
        @send-message="sendMessage($event)"
    >
    </chat-window>
</template>

<script>
import ChatWindow from 'vue-advanced-chat'
import 'vue-advanced-chat/dist/vue-advanced-chat.css'
import {parseTimestamp} from "@/utils/dates";
import {IsValidNumberBetweenOneAndHundred} from "@/utils/validator";
import {useMessagesStore} from "@/pinia/messages-store";
import {useRoomsStore} from "@/pinia/rooms-store";


export default {
    name: "ChatWidget",
    components: {ChatWindow},
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
            rooms: [
                {
                    roomId: '1',
                    roomName: 'Puns',
                    avatar: '/images/cooking.png',
                    unreadCount: 1,
                    users: [
                        {
                            _id: '1234', username: 'John Doe', status: {
                                state: 'online',
                                lastChanged: 'today, 14:30'
                            }
                        },
                        {
                            _id: '4321', username: 'John Snow', status: {
                                state: 'online',
                                lastChanged: 'today, 14:30'
                            }
                        }
                    ],
                    lastMessage: {
                        _id: '1234',
                        content: 'Pun Intended!',
                        senderId: '1234',
                        username: 'John Doe',
                        distributed: true,
                        seen: true,
                        date: parseTimestamp(new Date(), 'DD MMMM YYYY'),
                        timestamp: parseTimestamp(new Date(), 'HH:mm'),

                    },
                    typingUsers: []
                },

                {
                    roomId: '2',
                    roomName: 'Fun Facts',
                    avatar: '/images/fun-fact.png',
                    unreadCount: 1,
                    users: [
                        {
                            _id: '1234', username: 'John Doe', status: {
                                state: 'online',
                                lastChanged: 'today, 14:30'
                            }
                        },
                        {
                            _id: '4321', username: 'John Snow', status: {
                                state: 'online',
                                lastChanged: 'today, 14:30'
                            }
                        }
                    ],
                    lastMessage: {
                        _id: '1234',
                        content: 'Facts are Fun',
                        senderId: '1234',
                        username: 'John Doe',
                        distributed: true,
                        seen: true,
                        date: parseTimestamp(new Date(), 'DD MMMM YYYY'),
                        timestamp: parseTimestamp(new Date(), 'HH:mm'),
                    },
                    typingUsers: []
                },

                {
                    roomId: '3',
                    roomName: '3am Jokes',
                    avatar: '/images/joking.png',
                    unreadCount: 1,
                    users: [
                        {
                            _id: '1234', username: 'John Doe', status: {
                                state: 'online',
                                lastChanged: 'today, 14:30'
                            }
                        },
                        {
                            _id: '4321', username: 'John Snow', status: {
                                state: 'online',
                                lastChanged: 'today, 14:30'
                            }
                        }

                    ],
                    lastMessage: {
                        _id: '1234',
                        content: "Can't Sleep?",
                        senderId: '1234',
                        username: 'John Doe',
                        distributed: true,
                        seen: true,
                        date: parseTimestamp(new Date(), 'DD MMMM YYYY'),
                        timestamp: parseTimestamp(new Date(), 'HH:mm'),
                    },
                    typingUsers: []
                },

                {
                    roomId: '4',
                    roomName: 'Quotes',
                    avatar: '/images/quote.png',
                    unreadCount: 1,
                    users: [
                        {
                            _id: '1234', username: 'John Doe', status: {
                                state: 'online',
                                lastChanged: 'today, 14:30'
                            }
                        },
                        {
                            _id: '4321', username: 'John Snow', status: {
                                state: 'online',
                                lastChanged: 'today, 14:30'
                            }
                        }
                    ],
                    lastMessage: {
                        _id: '1234',
                        content: 'Makes Sense',
                        senderId: '1234',
                        username: 'John Doe',
                        distributed: true,
                        seen: true,
                        date: parseTimestamp(new Date(), 'DD MMMM YYYY'),
                        timestamp: parseTimestamp(new Date(), 'HH:mm'),
                    },
                    typingUsers: []
                },


            ],
            socketId: '',
            files: [],
            random: [],
            Attachment: [],
            roomsLoaded: true,
            messagesLoaded: true,
            loadingRooms: false,
            textMessages: {
                TYPE_MESSAGE: 'Input random number between 1 and 100',
                IS_ONLINE: 'Online',
                IS_TYPING: 'is typing...'
            },
            options: {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'}

        }
    },

    methods: {
        sendMessage({content, roomId, files, replyMessage}) {

            if (IsValidNumberBetweenOneAndHundred(content)){
                const message = {
                    _id: Math.random(),
                    content: content,
                    senderId: '1234',
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

                const responseMessage = {
                    _id: Math.random(),
                    content: "nice",
                    senderId: '4321',
                    username: 'John Doe',
                    date: parseTimestamp(new Date(), 'DD MMMM YYYY'),
                    timestamp: parseTimestamp(new Date(), 'HH:mm'),
                    system: false,
                    avatar: '/images/fun-fact.png',
                    roomId: roomId,
                    saved: true,
                    distributed: true,
                    seen: true,
                    disableActions: false,
                    disableReactions: false,
                }
                 this.messagesStore.setMessages(message)
                 this.roomsStore.updateTypingUsers(roomId)
                 this.responseMessage(roomId,responseMessage)
                 this.messages = this.messagesStore.getMessages.filter(x=>x.roomId===roomId)

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

            this.messages.map((val, obj) => {
                if (val.roomId === roomId && val._id === messageId && !remove) {
                    return {
                        ...val,
                        reactions: val.reactions[reaction.unicode] = ['1234']
                    }
                }
            })

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
        },
        openedFailedMessage({roomId, message}){
            console.log('here')
        }

    },


    mounted() {

        this.messagesLoaded = false
        this.messages = this.messagesStore.getMessages.filter(x=>x.roomId === '1');
        this.rooms = this.roomsStore.getRooms;

        setTimeout(()=>{
            this.messagesLoaded = true
        },1000)

    }

}
</script>

<style scoped>

</style>
