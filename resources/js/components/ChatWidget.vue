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
        :rooms-loaded="roomsLoaded"
        :loading-rooms="loadingRooms"
        :messages="messages"
        :messages-loaded="messagesLoaded"
        @fetch-messages="fetchMessages"
    >
    </chat-window>
</template>

<script>
import ChatWindow from 'vue-advanced-chat'
import 'vue-advanced-chat/dist/vue-advanced-chat.css'


export default {
    name: "ChatWidget",
    components: {ChatWindow},

    data: () => {
        return {
            styles:{
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
            messages:[ {
                _id: '7890',
                indexId: 12092,
                content: 'Message 1',
                senderId: '4321',
                username: 'John Doe',
                avatar: '/images/cooking.png',
                date: '13 November',
                timestamp: '10:20',
                system: false,
                saved: true,
                distributed: true,
                seen: true,
                disableActions: false,
                disableReactions: false,}],
            rooms: [
                {
                    roomId: '1',
                    roomName: 'Puns',
                    avatar: '/images/cooking.png',
                    users: [
                        {_id: '1234', username: 'John Doe'},
                        {_id: '4321', username: 'John Snow'}
                    ],
                    lastMessage: {
                        _id: '1234',
                        content: 'Pun Intended!',
                        senderId: '1234',
                        username: 'John Doe',
                        distributed: true,
                        seen: true,

                    },
                },

                {
                    roomId: '2',
                    roomName: 'Fun Facts',
                    avatar: '/images/fun-fact.png',
                    users: [
                        {_id: '1234', username: 'John Doe'},
                        {_id: '4321', username: 'John Snow'}
                    ],
                    lastMessage: {
                        _id: '1234',
                        content: 'Facts are Fun',
                        senderId: '1234',
                        username: 'John Doe',
                        distributed: true,
                        seen: true,
                    },
                },

                {
                    roomId: '3',
                    roomName: '3am Jokes',
                    avatar: '/images/joking.png',
                    users: [
                        {_id: '1234', username: 'John Doe'},
                        {_id: '4321', username: 'John Snow'}
                    ],
                    lastMessage: {
                        _id: '1234',
                        content: "Can't Sleep?",
                        senderId: '1234',
                        username: 'John Doe',
                        distributed: true,
                        seen: true,
                    },
                },

                {
                    roomId: '4',
                    roomName: 'Quotes',
                    avatar: '/images/quote.png',
                    users: [
                        {_id: '1234', username: 'John Doe'},
                        {_id: '4321', username: 'John Snow'}
                    ],
                    lastMessage: {
                        _id: '1234',
                        content: 'Makes Sense',
                        senderId: '1234',
                        username: 'John Doe',
                        distributed: true,
                        seen: true,
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
            textMessages:{
            TYPE_MESSAGE: 'Input random number between 1 and 100',
            }
        }
    },

    methods: {
        fetchMessages({ room, options = {} }){
            const introductoryMessages = [
            {
                _id: '7890',
                indexId: 12092,
                content: 'Pick a number between 1 and 100 and i will share a pun with you',
                senderId: '4321',
                username: 'John Doe',
                avatar: '/images/cooking.png',
                date: '13 November',
                timestamp: '10:20',
                system: false,
                roomId: '1',
                saved: true,
                distributed: true,
                seen: true,
                disableActions: false,
                disableReactions: false,
            },
                {
                    _id: '78913',
                    indexId: 120922,
                    content: 'Pick a number between 1 and 100 and i will share a random fun fact with you',
                    senderId: '4321',
                    username: 'John Doe',
                    avatar: '/images/cooking.png',
                    date: '13 November',
                    timestamp: '10:20',
                    system: false,
                    roomId: '2',
                    saved: true,
                    distributed: true,
                    seen: true,
                    disableActions: false,
                    disableReactions: false,
                },


            ]

            this.messages = introductoryMessages.filter(x=>x.roomId===room.roomId)
        }

    },


    mounted() {


    }
}
</script>

<style scoped>

</style>