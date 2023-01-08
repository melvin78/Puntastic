<?php

namespace App\Constants;
use Illuminate\Support\Collection;

class OpenAiChatPrompts
{



    public static function GetPrompts($chatContext): string {
        if ($chatContext === OpenAiChatContexts::FUN_FACT_CHECK->Context()){
            $prompt = new Collection([
                'I just read this,is this really true?',
                'i was wondering, is there any fact to this',
                'could you maybe cite some sources and give some analysis to prove this.',
                'is this true or false just wondering',
                'can you show me a study from where this came from, a paper,article or just anything',
                'is there any myth to this statement'
            ]);
            return $prompt->random();
        }

        return '';
    }
}
