<?php

namespace App\Constants;

enum OpenAiChatContexts
{
    case FUN_FACT_CHECK;
    case SIMILAR_FUN_FACT;


    public function Context(): int
    {
        return match($this)
        {
            OpenAiChatContexts::FUN_FACT_CHECK => 1,
            OpenAiChatContexts::SIMILAR_FUN_FACT => 2,

        };
    }


}
