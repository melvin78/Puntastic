<template>
    <chat-window
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
    />
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
            rooms: [
                {
                    roomId: '1',
                    roomName: 'Puns',
                    avatar: '/images/cooking.png',
                    users: [
                        {_id: '1234', username: 'John Doe'},
                        {_id: '4321', username: 'John Snow'}
                    ]
                },

                {
                    roomId: '2',
                    roomName: 'Fun Facts',
                    avatar: '/images/fun-fact.png',
                    users: [
                        {_id: '1234', username: 'John Doe'},
                        {_id: '4321', username: 'John Snow'}
                    ]
                },

                {
                    roomId: '3',
                    roomName: '3am Jokes',
                    avatar: '/images/joking.png',
                    users: [
                        {_id: '1234', username: 'John Doe'},
                        {_id: '4321', username: 'John Snow'}
                    ]
                },

                {
                    roomId: '4',
                    roomName: 'Quotes',
                    avatar: '/images/quote.png',
                    users: [
                        {_id: '1234', username: 'John Doe'},
                        {_id: '4321', username: 'John Snow'}
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
