import {defineStore} from 'pinia'
import {parseTimestamp} from "@/utils/dates";
import {ContentType, USERS} from "@/constants/content-types";
import {formatServerMessage} from "@/utils/modify-message";
import state from "pusher-js/src/core/http/state";


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

        ],
        currentUserId: '',

    }),
    getters: {
        getMessages(state) {
            return state.messages
        },
        getCurrentUserId(state) {
            return state.currentUserId
        }
    },
    actions: {
        setMessages(message) {
            this.messages.push(message)
        },
        async updateFunFactMessageReaction(reaction, remove, messageId, roomId) {


            const newReaction = {
                reaction: reaction.unicode,
                user: window.sessionStorage.getItem('web-melvin-chat-app'),
                identifier: messageId,
                action: remove ? 'remove' : 'add'
            }

            if (remove) {
                this.messages.map((val, obj) => {

                    if (val.roomId === roomId && val._id === messageId) {
                        let usersWhoReactedWithThisEmoji = val.reactions[reaction.unicode]
                        let currentUserId = window.sessionStorage.getItem('web-melvin-chat-app')
                        return {
                            ...val,
                            reactions: usersWhoReactedWithThisEmoji.splice(usersWhoReactedWithThisEmoji.indexOf(currentUserId),1)
                        }
                    }
                })
            }
            else{
                this.messages.map((val, obj) => {

                    if (val.roomId === roomId && val._id === messageId) {
                        let usersWhoReactedWithThisEmoji = val.reactions[reaction.unicode]
                        let currentUserId = window.sessionStorage.getItem('web-melvin-chat-app')
                        return {
                            ...val,
                            reactions: usersWhoReactedWithThisEmoji.push(currentUserId)
                        }
                    }
                })
            }



            await fetch(`/api/update-fun-fact-reaction`,
                {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },

                    body: JSON.stringify(newReaction),
                },
            )
                .then((response) => response.json())
                .then((data) => {

                });


        },
        async getContentMessage(roomId, messageNumber) {
            switch (roomId) {
                case ContentType.PUNS:
                    await fetch(`/api/puns/${messageNumber}`)
                        .then((response) => response.json())
                        .then((data) => console.log(data));
                    break

                case ContentType.FUN_FACTS:
                    await fetch(`/api/fun-facts/${messageNumber}`)
                        .then((response) => response.json())
                        .then(
                            (data) => {
                                const responseMessage = formatServerMessage(data[0], roomId)
                                console.log(data)
                                this.messages.push(responseMessage)
                            })
                    break

                case ContentType.THREE_AM_JOKES:
                    await fetch(`/api/three-am/${messageNumber}`)
                        .then((response) => response.json())
                        .then((data) => console.log(data))
                    break

                case ContentType.QUOTES:
                    await fetch(`/api/quotes/${messageNumber}`)
                        .then((response) => response.json())
                        .then((data) => console.log(data))
                    break

            }

        },
        async updateMessageReactions(messageId, reaction, userId) {

            const newReaction = {
                "🥁": ['1234'],
            }
            await fetch(`/api/updateReactions/${messageId}/${userId}`,
                {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },

                    body: JSON.stringify(newReaction),
                },
            )
                .then((response) => response.json())
                .then((data) => console.log(data));


        },
        setCurrentUserId(currentUserId) {
            this.currentUserId = currentUserId
        }

    }
})
