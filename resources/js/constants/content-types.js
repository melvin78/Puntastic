export const ContentType = {
    PUNS: '1',
    FUN_FACTS: '2',
    THREE_AM_JOKES: '3',
    QUOTES: '4',
}

export const USERS = {
    HUMAN_USER: '1234',
    CHAT_BOT: '4321'

}

export const STATUS_CODES = {
    SUCCESSFULLY_REMOVED_REACTION: 1
}

export const CHAT_GPT_TEMPLATES = {

    FUN_FACTS: `<div class="">
  <div class="vac-message-wrapper" style="cursor: pointer">
    <!----><!---->
    <div class="vac-message-box vac-offset-current chat-gpt-message-box"
         style="display: flex;flex-direction: column;"><!----><!---->
      <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset"><span>Choose an option:</span>
      </div>
      <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset chat-gpt-query">
      <div class="vac-format-message-wrapper">
      <div class="vac-format-container">
         <div class="vac-message-card vac-message-current " style="background-color: rgba(255, 255, 240, 0.11) !important;"><!----><!---->
          <span style="display: flex; justify-content: center; text-align: center"><span>Fact Check ✅</span></span>

        </div>
        <span></span></div>
     </div>
      </div>

      <div style="padding: 1px 1px;min-width: 25px;" class="vac-message-container vac-message-container-offset chat-gpt-query">
        <div style="background-color: rgba(255, 255, 240, 0.11) !important;" class="vac-message-card vac-message-current  "><!----><!---->
         <span style="display: flex; justify-content: center; text-align: center"><span>Similar Fun Facts 💡</span></span>

        </div>
        <span></span></div><!---->
      <div class="vac-avatar vac-avatar-current" style="background-image: url(&quot;/images/chatgpt.png&quot;);"></div>
      <!----></div>
  </div>
</div>`

}
