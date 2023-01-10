import {defineStore} from 'pinia'
import {parseTimestamp} from "@/utils/dates";
import {ContentType, USERS} from "@/constants/code-constants";
import {formatServerMessage} from "@/utils/modify-message";
import {DEFAULT_SYSTEM_MESSAGES} from "@/constants/chat-constants";



export const useMessagesStore = defineStore('messages-store', {
    state: () => ({

        messages: DEFAULT_SYSTEM_MESSAGES,
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
        async updateMessageReaction(reaction, remove, messageId, roomId) {

            const currentUserId = window.sessionStorage.getItem('web-melvin-chat-app')

            const newReaction = {
                reaction: reaction.unicode,
                user: currentUserId,
                identifier: messageId,
                action: remove ? 'remove' : 'add'
            }

            switch (roomId) {
                case ContentType.PUNS_AND_JOKES:
                    remove?
                        this.messages.map((val, obj) => {

                            if (val.roomId === roomId && val._id === messageId) {
                                let usersWhoReactedWithThisEmoji = val.reactions[reaction.unicode]
                                return {
                                    ...val,
                                    reactions: usersWhoReactedWithThisEmoji.splice(usersWhoReactedWithThisEmoji.indexOf(currentUserId), 1)
                                }
                            }
                        })
                    :
                        this.messages.map((val, obj) => {

                            if (val.roomId === roomId && val._id === messageId) {
                                let usersWhoReactedWithThisEmoji = !!val.reactions[reaction.unicode]
                                return {
                                    ...val,
                                    reactions: usersWhoReactedWithThisEmoji ? val.reactions[reaction.unicode].push(currentUserId) : val.reactions[reaction.unicode] = [currentUserId]
                                }
                            }
                        })

                    await fetch(`/api/update-puns-reaction`,
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
                    break

                case ContentType.FUN_FACTS:
                    remove ?
                        this.messages.map((val, obj) => {

                            if (val.roomId === roomId && val._id === messageId) {
                                let usersWhoReactedWithThisEmoji = val.reactions[reaction.unicode]
                                return {
                                    ...val,
                                    reactions: usersWhoReactedWithThisEmoji.splice(usersWhoReactedWithThisEmoji.indexOf(currentUserId), 1)
                                }
                            }
                        })
                    :
                        this.messages.map((val, obj) => {

                            if (val.roomId === roomId && val._id === messageId) {
                                let usersWhoReactedWithThisEmoji = !!val.reactions[reaction.unicode]
                                return {
                                    ...val,
                                    reactions: usersWhoReactedWithThisEmoji ? val.reactions[reaction.unicode].push(currentUserId) : val.reactions[reaction.unicode] = [currentUserId]
                                }
                            }
                        })

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

                    break


                case ContentType.QUOTES:

                    remove ? this.messages.map((val, obj) => {

                            if (val.roomId === roomId && val._id === messageId) {
                                let usersWhoReactedWithThisEmoji = val.reactions[reaction.unicode]
                                return {
                                    ...val,
                                    reactions: usersWhoReactedWithThisEmoji.splice(usersWhoReactedWithThisEmoji.indexOf(currentUserId), 1)
                                }
                            }
                        })
                    :
                        this.messages.map((val, obj) => {

                            if (val.roomId === roomId && val._id === messageId) {
                                let usersWhoReactedWithThisEmoji = !!val.reactions[reaction.unicode]
                                return {
                                    ...val,
                                    reactions: usersWhoReactedWithThisEmoji ? val.reactions[reaction.unicode].push(currentUserId) : val.reactions[reaction.unicode] = [currentUserId]
                                }
                            }
                        })


                    await fetch(`/api/update-quotes-reaction`,
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

                    break


            }


        },
        async getContentMessage(roomId, messageNumber) {
            switch (roomId) {
                case ContentType.PUNS_AND_JOKES:
                    await fetch(`/api/puns/${messageNumber}`)
                        .then((response) => response.json())
                        .then(
                            (data) => {
                                const responseMessage = formatServerMessage(data[0], roomId)
                                this.messages.push(responseMessage)
                            });
                    break

                case ContentType.FUN_FACTS:
                    await fetch(`/api/fun-facts/${messageNumber}`)
                        .then((response) => response.json())
                        .then(
                            (data) => {
                                const responseMessage = formatServerMessage(data[0], roomId)
                                this.messages.push(responseMessage)
                            })
                    break

                case ContentType.THREE_AM_JOKES:
                    await fetch(`/api/three-am/${messageNumber}`)
                        .then((response) => response.json())
                        .then((data) => {
                            const responseMessage = formatServerMessage(data[0], roomId)
                            this.messages.push(responseMessage)
                        })
                    break

                case ContentType.QUOTES:
                    await fetch(`/api/quotes/${messageNumber}`)
                        .then((response) => response.json())
                        .then(
                            (data) => {
                                const responseMessage = formatServerMessage(data[0], roomId)
                                this.messages.push(responseMessage)
                            })
                    break

            }

        },
        setCurrentUserId(currentUserId) {
            this.currentUserId = currentUserId
        }

    }
})
