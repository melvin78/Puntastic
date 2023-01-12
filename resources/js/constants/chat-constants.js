import {parseTimestamp} from "@/utils/dates";

export const CHAT_GPT_TEMPLATES = {

    FUN_FACTS: `<div class="">
  <div class="vac-message-wrapper" style="cursor: pointer">
    <!----><!---->
    <div class="vac-message-box vac-offset-current chat-gpt-message-box"
         style="display: flex;flex-direction: column;"><!----><!---->
      <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset"><span>Choose an option:</span>
      </div>
      <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset fact-check-query">
      <div class="vac-format-message-wrapper">
      <div class="vac-format-container">
         <div class="vac-message-card vac-message-current " style="background-color: rgba(255, 255, 240, 0.11) !important;"><!----><!---->
          <span style="display: flex; justify-content: center; text-align: center"><span>Fact Check ✅</span></span>

        </div>
        <span></span></div>
     </div>
      </div>

      <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset similar-facts-query">
        <div style="background-color: rgba(255, 255, 240, 0.11) !important;" class="vac-message-card vac-message-current  "><!----><!---->
         <span style="display: flex; justify-content: center; text-align: center"><span>Similar Fun Facts 💡</span></span>

        </div>
        <span></span></div><!---->
      <div class="vac-avatar vac-avatar-current" style="background-image: url(&quot;/images/chatgpt.png&quot;);"></div>
      <!----></div>
  </div>
</div>`,

    PUNS_AND_JOKES: `<div class="">
  <div class="vac-message-wrapper" style="cursor: pointer">
    <!----><!---->
    <div class="vac-message-box vac-offset-current chat-gpt-message-box"
         style="display: flex;flex-direction: column;"><!----><!---->
      <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset"><span>Choose an option:</span>
      </div>
      <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset dont-get-it">
      <div class="vac-format-message-wrapper">
      <div class="vac-format-container">
         <div class="vac-message-card vac-message-current " style="background-color: rgba(255, 255, 240, 0.11) !important;"><!----><!---->
          <span style="display: flex; justify-content: center; text-align: center"><span>I dont get it 😕</span></span>

        </div>
        <span></span></div>
     </div>
      </div>

      <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset similar-jokes">
        <div style="background-color: rgba(255, 255, 240, 0.11) !important;" class="vac-message-card vac-message-current  "><!----><!---->
         <span style="display: flex; justify-content: center; text-align: center"><span>Similar Joke 😝</span></span>

        </div>
        <span></span></div><!---->

                      <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset poem-joke">
        <div style="background-color: rgba(255, 255, 240, 0.11) !important;" class="vac-message-card vac-message-current  "><!----><!---->
         <span style="display: flex; justify-content: center; text-align: center"><span>Poem This ✨</span></span>

        </div>
        <span></span></div><!---->

      <div class="vac-avatar vac-avatar-current" style="background-image: url(&quot;/images/chatgpt.png&quot;);"></div>
      <!----></div>
  </div>
</div>`,

    QUOTES: `<div class="">
  <div class="vac-message-wrapper" style="cursor: pointer">
    <!----><!---->
    <div class="vac-message-box vac-offset-current chat-gpt-message-box"
         style="display: flex;flex-direction: column;"><!----><!---->
      <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset"><span>Choose an option:</span>
      </div>
      <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset dissect-quote">
      <div class="vac-format-message-wrapper">
      <div class="vac-format-container">
         <div class="vac-message-card vac-message-current " style="background-color: rgba(255, 255, 240, 0.11) !important;"><!----><!---->
          <span style="display: flex; justify-content: center; text-align: center"><span>Dissect Quote 🤓</span></span>

        </div>
        <span></span></div>
     </div>
      </div>

      <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset similar-quotes">
        <div style="background-color: rgba(255, 255, 240, 0.11) !important;" class="vac-message-card vac-message-current  "><!----><!---->
         <span style="display: flex; justify-content: center; text-align: center"><span>Similar Quotes 📝</span></span>

        </div>
        <span></span></div><!---->

              <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset poem-quote">
        <div style="background-color: rgba(255, 255, 240, 0.11) !important;" class="vac-message-card vac-message-current  "><!----><!---->
         <span style="display: flex; justify-content: center; text-align: center"><span>Poem This ✨</span></span>

        </div>
        <span></span></div><!---->

      <div class="vac-avatar vac-avatar-current" style="background-image: url(&quot;/images/chatgpt.png&quot;);"></div>
      <!----></div>
  </div>
</div>`

}

export const  CHAT_STYLES = {
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

}

export const ROOM_ACTIONS = [

        {
            name: 'github',
            title: 'View Source Code'
        },

]

export const TEXT_MESSAGES = {

    TYPE_MESSAGE: 'Input random number between 1 and 50',
        IS_ONLINE: 'Online',
    IS_TYPING: 'is typing...'

}

export const  DEFAULT_SYSTEM_MESSAGES = [
    {
        _id: '7890',
        indexId: 12092,
        content: 'Pun absolutely intended ....* badam tiss * 🥁. Input random number between 1 and 50 ',
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
        content: 'Some cool fun facts 💡 you might never heard of. Input random number between 1 and 50',
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
        content: "Jokes So bad they shouldn't be seeing the light of day 😁. Input random number between 1 and 50",
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
        content: "Motivational,inspirational and famous quotes to brighten your day.🧘 Input random number between 1 and 50",
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

export const ROOM_TEMPLATES =  [
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


]

export const CHAT_GPT_PROMPTS = {
    FUN_FACT_CHECK:1,
    SIMILAR_FUN_FACT:2,
    PUN_I_DONT_GET_IT : 3,
    SIMILAR_JOKE : 4,
    EXPLAIN_QUOTE:5,
    SIMILAR_QUOTES:6,
    POEM_JOKE:7,
    POEM_QUOTE:8,
}




