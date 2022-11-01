<template>
    <chat-window
        :height="'500px'"
        :rooms="rooms"
        :rooms-loaded="roomsLoaded"
        :loading-rooms="loadingRooms"
        :messages="messages"
        :messages-loaded="messagesLoaded"
    />
</template>

<script>
import ChatWindow from 'vue-advanced-chat'
import 'vue-advanced-chat/dist/vue-advanced-chat.css'

export default {
    name: "ChatWidget",
    components:{ChatWindow},

    data: () => {
        return {
            rooms: [
                {
                roomId: '1',
                roomName: 'Puns',
                avatar: '/images/cooking.png',
                users: [
                    { _id: '1234', username: 'John Doe' },
                    { _id: '4321', username: 'John Snow' }
                ]
            },

                {
                    roomId: '2',
                    roomName: 'Fun Facts',
                    avatar: '/images/fun-fact.png',
                    users: [
                        { _id: '1234', username: 'John Doe' },
                        { _id: '4321', username: 'John Snow' }
                    ]
                },

                {
                    roomId: '3',
                    roomName: '3am Jokes',
                    avatar: '/images/joking.png',
                    users: [
                        { _id: '1234', username: 'John Doe' },
                        { _id: '4321', username: 'John Snow' }
                    ]
                },

                {
                    roomId: '4',
                    roomName: 'Quotes',
                    avatar: '/images/quote.png',
                    users: [
                        { _id: '1234', username: 'John Doe' },
                        { _id: '4321', username: 'John Snow' }
                    ]
                },



            ],
            socketId: '',
            files: [],
            random: [],
            Attachment: [],
            roomsLoaded: true,
            messagesLoaded: false,
            loadingRooms: false,
            messages: [],
        }
    },

    methods: {}
}
</script>

<style scoped>

</style>
