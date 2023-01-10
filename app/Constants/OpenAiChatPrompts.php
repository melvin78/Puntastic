<?php

namespace App\Constants;
use Illuminate\Support\Collection;

class OpenAiChatPrompts
{

    public static function GetPrompts($chatContext): string {

        $prompt = null;

        if ($chatContext === OpenAiChatContexts::FUN_FACT_CHECK->Context()){
            $prompt = new Collection([
                'I just read this,is this really true?',
                'i was wondering, is there any fact to this',
                'could you maybe cite some sources and give some analysis to prove this.',
                'is this true or false just wondering',
                'can you show me a study from where this came from, a paper,article or just anything',
                'is there any myth to this statement'
            ]);

        }

        else if ($chatContext === OpenAiChatContexts::SIMILAR_FUN_FACT->Context()){
            $prompt = new Collection([
                'what other fun fact can you tell me similar to this text?',
                'tell me another fact about this message that very few people are aware about',
                'in point form what other fun facts can you tell me from this message',
                'i find this fun fact to be very interesting what other fun fact do you know about from what i have just written. Surprise me',
                'are there any other fun facts that are related to this one. You can use emojis in your response as i have done.😃',
                'wow! looks like i have never known this, completely mind blown. Anything else i might not have known about this subject'
            ]);
        }

        else if ($chatContext === OpenAiChatContexts::PUN_I_DONT_GET_IT->Context()){
            $prompt = new Collection([
                'this pun has completely gone over my head please help.',
                'explain this pun like am 10 years old.',
                'someone told me this and i am struggling to understand it. How best can you explain it',
                'please explain this joke to me.',
            ]);
        }

        else if ($chatContext === OpenAiChatContexts::SIMILAR_JOKE->Context()){
            $prompt = new Collection([
                'what other puns/jokes do you have for me similar to this one. You can use emojis to show expression',
                'what other punchlines similar to this do you have',
                'come up with other puns/jokes like this one. Get creative with it.',
            ]);
        }

        return $prompt->random();
    }
}
