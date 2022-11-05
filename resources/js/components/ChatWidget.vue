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
        @send-message="sendMessage($event)"
    >
    </chat-window>
</template>

<script>
import ChatWindow from 'vue-advanced-chat'
import {reactive, toRaw} from 'vue'
import 'vue-advanced-chat/dist/vue-advanced-chat.css'
import {parseTimestamp} from "@/utils/dates";
import {IsValidNumberBetweenOneAndHundred} from "@/utils/validator";


export default {
    name: "ChatWidget",
    components: {ChatWindow},

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
                    typingUsers: [4321]
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
                },


            ],
            socketId: '',
            files: [],
            random: [],
            Attachment: [],
            roomsLoaded: true,
            messagesLoaded: false,
            loadingRooms: false,
            textMessages: {
                TYPE_MESSAGE: 'Input random number between 1 and 100',
                IS_ONLINE: 'Online',
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
                    saved: true,
                    distributed: true,
                    seen: true,
                    disableActions: false,
                    disableReactions: false,


                }
                this.messages.push(message)
            }


        },

        fetchMessages({room, options = {}}) {
            const introductoryMessages = [
                {
                    _id: '7890',
                    indexId: 12092,
                    content: 'Pun absolutely intended ....* badam tiss * 🥁. ',
                    senderId: '4321',
                    username: 'John Doe',
                    avatar: '/images/cooking.png',
                    date: parseTimestamp(new Date(), 'DD MMMM YYYY'),
                    timestamp: parseTimestamp(new Date(), 'HH:mm'),
                    system: true,
                    roomId: '1',
                    saved: true,
                    distributed: true,
                    seen: true,
                    disableActions: false,
                    disableReactions: false,
                    reactions: {
                        "🥁": ['1234'],
                    },
                },
                {
                    _id: '78913',
                    indexId: 120922,
                    content: 'Some cool fun facts 💡 you might never heard of.',
                    senderId: '4321',
                    username: 'John Doe',
                    avatar: '/images/fun-fact.png',
                    date: parseTimestamp(new Date(), 'DD MMMM YYYY'),
                    timestamp: parseTimestamp(new Date(), 'HH:mm'),
                    system: true,
                    roomId: '2',
                    saved: true,
                    distributed: true,
                    seen: true,
                    disableActions: false,
                    disableReactions: false,
                    reactions: {
                        "💡": ['1234',],
                    },
                },
                {
                    _id: '78113',
                    indexId: 1230922,
                    content: "Jokes So bad they shouldn't be seeing the light of day 😁.",
                    senderId: '4321',
                    username: 'John Doe',
                    avatar: '/images/joking.png',
                    date: parseTimestamp(new Date(), 'DD MMMM YYYY'),
                    timestamp: parseTimestamp(new Date(), 'HH:mm'),
                    system: true,
                    roomId: '3',
                    saved: true,
                    distributed: true,
                    seen: true,
                    disableActions: false,
                    disableReactions: false,
                    reactions: {
                        "😁": ['1234',],
                    },
                },
                {
                    _id: '78213',
                    indexId: 12312,
                    content: "Motivational,inspirational and famous quotes to brighten your day.🧘‍",
                    senderId: '4321',
                    username: 'John Doe',
                    avatar: '/images/quote.png',
                    date: parseTimestamp(new Date(), 'DD MMMM YYYY'),
                    timestamp: parseTimestamp(new Date(), 'HH:mm'),
                    system: true,
                    roomId: '4',
                    saved: true,
                    distributed: true,
                    seen: true,
                    disableActions: false,
                    disableReactions: false,
                    reactions: {
                        "🧘": ['1234',],
                    },
                },
            ]

            this.messages = introductoryMessages.filter(x => x.roomId === room.roomId)
            this.messagesLoaded = true

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

        openedFailedMessage({ roomId, message }){
            console.log('here')
        }

    },

}
</script>

<style scoped>

</style>
