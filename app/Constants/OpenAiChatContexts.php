<?php

namespace App\Constants;

enum OpenAiChatContexts
{
    case FUN_FACT_CHECK;
    case SIMILAR_FUN_FACT;
    case PUN_I_DONT_GET_IT;
    case SIMILAR_JOKE;
    case EXPLAIN_QUOTE;
    case SIMILAR_QUOTES;
    case POEM_JOKE;
    case POEM_QUOTE;


    public function Context(): int
    {
        return match($this)
        {
            OpenAiChatContexts::FUN_FACT_CHECK => 1,
            OpenAiChatContexts::SIMILAR_FUN_FACT => 2,
            OpenAiChatContexts::PUN_I_DONT_GET_IT => 3,
            OpenAiChatContexts::SIMILAR_JOKE => 4,
            OpenAiChatContexts::EXPLAIN_QUOTE=>5,
            OpenAiChatContexts::SIMILAR_QUOTES=>6,
            OpenAiChatContexts::POEM_JOKE=>7,
            OpenAiChatContexts::POEM_QUOTE=>8,

        };
    }


}
