<?php

namespace App\Constants;

enum OpenAiChatContexts
{
    case FUN_FACT_CHECK;
    case SIMILAR_FUN_FACT;
    case PUN_I_DONT_GET_IT;
    case SIMILAR_JOKE;


    public function Context(): int
    {
        return match($this)
        {
            OpenAiChatContexts::FUN_FACT_CHECK => 1,
            OpenAiChatContexts::SIMILAR_FUN_FACT => 2,
            OpenAiChatContexts::PUN_I_DONT_GET_IT => 3,
            OpenAiChatContexts::SIMILAR_JOKE => 4

        };
    }


}
