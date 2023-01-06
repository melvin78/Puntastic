import {defineStore} from 'pinia'
import {ROOM_TEMPLATES} from "@/constants/chat-constants";


export const useRoomsStore = defineStore('rooms-store', {
    state: () => ({

        rooms: ROOM_TEMPLATES

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
