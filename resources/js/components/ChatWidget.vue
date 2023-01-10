<template>
    <vue-advanced-chat
        ref="advancedChat"
        :current-user-id="currentUserId"
        :text-messages="JSON.stringify(textMessages)"
        :height="'500px'"
        :theme="'dark'"
        :show-audio="false"
        :show-search="false"
        :show-files="false"
        :show-send-icon="showSendIcon"
        :show-add-room="false"
        :show-emojis="false"
        :styles="JSON.stringify(styles)"
        :rooms="JSON.stringify(rooms)"
        :message-actions="[]"
        :rooms-loaded="roomsLoaded"
        :loading-rooms="loadingRooms"
        :messages="JSON.stringify(messages)"
        :messages-loaded="messagesLoaded"
        @send-message-reaction="sendMessageReaction($event.detail[0])"
        @fetch-messages="fetchMessages($event.detail[0])"
        @typing-message="typingMessage($event.detail[0])"
        @send-message="sendMessage($event.detail[0])"
        textarea-action-enabled="true"
    >

        <template v-if="showChatGPTIcon">
            <div slot="custom-action-icon">
                <ChatGPTSvgIcon @init-chat-gpt="initChatGPT"/>
            </div>
        </template>

    </vue-advanced-chat>
</template>

<script>
import {register} from 'vue-advanced-chat'
import {parseTimestamp} from "@/utils/dates";
import {generateRandomString, IsValidNumberBetweenOneAndHundred} from "@/utils/validator";
import {useMessagesStore} from "@/pinia/messages-store";
import {useRoomsStore} from "@/pinia/rooms-store";
import ChatGPTSvgIcon from "@/components/ChatGPTSvgIcon.vue";
import {CHAT_GPT_PROMPTS, CHAT_GPT_TEMPLATES, CHAT_STYLES, TEXT_MESSAGES} from "@/constants/chat-constants";
import {ContentType, USERS} from "@/constants/code-constants";
import {formatChatGptMessage} from "@/utils/modify-message";

register()
export default {
    name: "ChatWidget",
    components: {ChatGPTSvgIcon},
    setup() {
        const messagesStore = useMessagesStore()
        const roomsStore = useRoomsStore()
        return {messagesStore, roomsStore}
    },

    data: () => {
        return {
            styles: CHAT_STYLES,
            messages: [],
            currentRoom: '',
            currentUserId: USERS.HUMAN_USER,
            socketId: '',
            chatGptActivated: false,
            showSendIcon: false,
            Attachment: [],
            roomsLoaded: true,
            messagesLoaded: true,
            loadingRooms: false,
            showChatGPTIcon: false,
            textMessages: TEXT_MESSAGES,
            options: {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'},
            rooms: [],
            vueAdvancedChatWebComponent: null

        }
    },

    methods: {
        initChatGPT() {
            console.log('executed inside chatgpt')
            const scrollContainerDiv = this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-container-scroll')

            switch (this.currentRoom) {

                case ContentType.FUN_FACTS:

                    setTimeout(() => {

                        scrollContainerDiv.classList.add('vac-scroll-smooth')

                        scrollContainerDiv.scrollTo({top: scrollContainerDiv.scrollHeight, behavior: 'smooth'})

                        setTimeout(() => scrollContainerDiv.classList.remove('vac-scroll-smooth'))

                    }, 50)

                    this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container span').insertAdjacentHTML('beforeend', CHAT_GPT_TEMPLATES.FUN_FACTS)

                    break;

                case ContentType.PUNS_AND_JOKES:

                    setTimeout(() => {

                        scrollContainerDiv.classList.add('vac-scroll-smooth')

                        scrollContainerDiv.scrollTo({top: scrollContainerDiv.scrollHeight, behavior: 'smooth'})

                        setTimeout(() => scrollContainerDiv.classList.remove('vac-scroll-smooth'))

                    }, 50)

                    this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container span').insertAdjacentHTML('beforeend', CHAT_GPT_TEMPLATES.PUNS_AND_JOKES)

                    break;

                case ContentType.QUOTES:

                    setTimeout(() => {

                        scrollContainerDiv.classList.add('vac-scroll-smooth')

                        scrollContainerDiv.scrollTo({top: scrollContainerDiv.scrollHeight, behavior: 'smooth'})

                        setTimeout(() => scrollContainerDiv.classList.remove('vac-scroll-smooth'))

                    }, 50)

                    this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container span').insertAdjacentHTML('beforeend', CHAT_GPT_TEMPLATES.QUOTES)

                    break;

            }



        },

        sendMessage({content, roomId, files, replyMessage}) {


            if (IsValidNumberBetweenOneAndHundred(content)) {
                this.showChatGPTIcon = true

                this.chatGptActivated = false

                const message = {
                    _id: Math.random(),
                    content: content,
                    senderId: this.currentUserId,
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


                this.messagesStore.setMessages(message)

                this.roomsStore.updateTypingUsers(roomId)

                this.messages = this.messagesStore.getMessages.filter(x => x.roomId === roomId)

                this.messagesStore.getContentMessage(roomId, content).then(() => {

                    this.roomsStore.removeTypingUsers(roomId)

                    this.messages = this.messagesStore.getMessages.filter(x => x.roomId === roomId)
                })


            }


        },

        fetchMessages({room, options = {}}) {
            this.messagesLoaded = false

            this.currentRoom = room.roomId

            this.messages = this.messagesStore.getMessages.filter(x => x.roomId === room.roomId)


            setTimeout(() => {
                this.messagesLoaded = true
            }, 1000)
        },

        sendMessageReaction({reaction, remove, messageId, roomId}) {

            this.messagesStore.updateMessageReaction(reaction, remove, messageId, roomId)

            this.messages = this.messagesStore.getMessages.filter(x => x.roomId === roomId)

        },
        typingMessage({roomId, message}) {

            this.showSendIcon = IsValidNumberBetweenOneAndHundred(message)

        },

        async getChatGptOpinion(context){

            const messages = this.messages.filter(x => x.chatGptMessage === false)

            let promptRequest = {
                Prompt: messages[messages.length - 1].content,
                Context:context
            }

            this.roomsStore.updateTypingUsers(this.currentRoom)

            await fetch(`/api/chat-gpt`,
                {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },

                    body: JSON.stringify(promptRequest),
                },
            )
                .then((response) => response.json())
                .then((data) => {

                    const chatGptAnswer = formatChatGptMessage(data,this.currentRoom)

                    this.messagesStore.setMessages(chatGptAnswer)

                    this.messages = this.messagesStore.getMessages.filter(x => x.roomId === this.currentRoom)

                    this.roomsStore.removeTypingUsers(this.currentRoom)


                });
        },

        chatGptFunFactCheck(){
            this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container').addEventListener('click', (e) => {

                const target = e.target.closest(".fact-check-query"); // Or any other selector.

                if (target && this.currentRoom === ContentType.FUN_FACTS) {
                    this.getChatGptOpinion(CHAT_GPT_PROMPTS.FUN_FACT_CHECK)
                }

            })
        },
        chatGptSimilarFunFact(){
            this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container').addEventListener('click', (e) => {

                const target = e.target.closest(".similar-facts-query"); // Or any other selector.

                if (target && this.currentRoom === ContentType.FUN_FACTS) {
                    this.getChatGptOpinion(CHAT_GPT_PROMPTS.SIMILAR_FUN_FACT)
                }

            })
        },
        chatGptPunIDontGetIt(){
            this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container').addEventListener('click', (e) => {

                const target = e.target.closest(".dont-get-it"); // Or any other selector.

                if (target && this.currentRoom === ContentType.PUNS_AND_JOKES) {
                    this.getChatGptOpinion(CHAT_GPT_PROMPTS.PUN_I_DONT_GET_IT)
                }

            })
        },
        chatGptSimilarJoke(){
            this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container').addEventListener('click', (e) => {

                const target = e.target.closest(".similar-jokes"); // Or any other selector.

                if (target && this.currentRoom === ContentType.PUNS_AND_JOKES) {
                    this.getChatGptOpinion(CHAT_GPT_PROMPTS.SIMILAR_JOKE)
                }

            })
        },
        chatGptExplainQuote(){
            this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container').addEventListener('click', (e) => {

                const target = e.target.closest(".dissect-quote"); // Or any other selector.

                if (target && this.currentRoom === ContentType.QUOTES) {
                    this.getChatGptOpinion(CHAT_GPT_PROMPTS.EXPLAIN_QUOTE)
                }

            })
        },
        chatGptSimilarQuote(){
            this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container').addEventListener('click', (e) => {

                const target = e.target.closest(".similar-quotes"); // Or any other selector.

                if (target && this.currentRoom === ContentType.QUOTES) {
                    this.getChatGptOpinion(CHAT_GPT_PROMPTS.SIMILAR_QUOTES)
                }

            })
        },
        chatGptPoemThisJoke(){

            this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container').addEventListener('click', (e) => {

                const target = e.target.closest(".poem-joke"); // Or any other selector.

                if (target && this.currentRoom === ContentType.PUNS_AND_JOKES) {
                    this.getChatGptOpinion(CHAT_GPT_PROMPTS.POEM_JOKE)
                }

            })
        },
        chatGptPoemThisQuote(){
            this.vueAdvancedChatWebComponent.shadowRoot.querySelector('div.vac-messages-container').addEventListener('click', (e) => {

                const target = e.target.closest(".poem-quote"); // Or any other selector.

                if (target && this.currentRoom === ContentType.QUOTES) {
                    this.getChatGptOpinion(CHAT_GPT_PROMPTS.POEM_QUOTE)
                }

            })
        }

    },


    mounted() {

        this.messagesLoaded = false

        this.messages = this.messagesStore.getMessages.filter(x => x.roomId === ContentType.PUNS_AND_JOKES);

        this.rooms = this.roomsStore.getRooms;

        this.vueAdvancedChatWebComponent = document.querySelector("vue-advanced-chat")

        this.chatGptFunFactCheck()
        this.chatGptSimilarFunFact()
        this.chatGptPunIDontGetIt()
        this.chatGptSimilarJoke()
        this.chatGptExplainQuote()
        this.chatGptPoemThisQuote()
        this.chatGptPoemThisJoke()
        this.chatGptSimilarJoke()

        setTimeout(() => {

            this.messagesLoaded = true

        }, 1000)


    },

    created() {

        if (!window.sessionStorage.getItem('web-melvin-chat-app')) {

            const randomUserId = generateRandomString()

            this.currentUserId = `${randomUserId}`

            window.sessionStorage.setItem('web-melvin-chat-app', `${randomUserId}`)

        } else {

            this.currentUserId = window.sessionStorage.getItem('web-melvin-chat-app')
        }


    }


}
</script>

<style scoped>


</style>
