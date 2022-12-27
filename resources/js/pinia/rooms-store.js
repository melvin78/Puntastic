import {defineStore} from 'pinia'
import {parseTimestamp} from "@/utils/dates";


export const useRoomsStore = defineStore('rooms-store', {
    state: () => ({

        rooms: [
            {
                roomId: '1',
                roomName: 'Puns & Jokes',
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

    }),
    getters: {
        getRooms(state) {
            return state.rooms
        },
    },
    actions: {
        async updateTypingUsers(roomId) {
            const roomWithUserTyping = this.rooms.find(x => x.roomId === roomId)
            roomWithUserTyping.typingUsers.push('4321')

            this.rooms.forEach((room, index) => {
                if (room.roomId === roomId) {
                    this.rooms[index] = roomWithUserTyping
                }
            });
        },


        async removeTypingUsers(roomId) {

            await new Promise((resolve) => setTimeout(() => {
                const roomWithUserTyping = this.rooms.find(x => x.roomId === roomId)
                roomWithUserTyping.typingUsers = []

                this.rooms.forEach((room, index) => {
                    if (room.roomId === roomId) {
                        this.rooms[index] = roomWithUserTyping
                    }
                });
                resolve();
            }, 1000));

        }
    }
})
