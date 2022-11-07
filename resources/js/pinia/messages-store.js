import {defineStore} from 'pinia'
import {parseTimestamp} from "@/utils/dates";


export const useMessagesStore = defineStore('messages-store', {
    state: () => ({

        messages: [
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
                    "🧘": ['1234']
                }
            }

                ]

    }),
    getters: {
        getMessages(state){
            return state.messages
        },
    },
    actions: {
        setMessages(message) {
            this.messages.push(message)
        },

    }
})
