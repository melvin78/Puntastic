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
                //"write a poem that rhymes within the context of this joke/pun. Use william's shakespeare way of writing or any other great poet you choose"
            ]);
        }

        else if ($chatContext === OpenAiChatContexts::EXPLAIN_QUOTE->Context()){
            $prompt = new Collection([
                'This is a very enlightening quote.What more can you add based on your interpretation',
                'I find this to be a very inspiring quote. However, Is it possible to give an example where this would be applicable in a real life situation',
                'Give an in depth explanation of this quote. Summarize it in not more than 100 words',
                'Drawing inspiration from some of the greatest philosophers like socrates,plato,aristotle Friedrich Nietzsche e.t.c. explain this quote from a philosophical point of view'

            ]);
        }
        else if ($chatContext === OpenAiChatContexts::SIMILAR_QUOTES->Context()){
            $prompt = new Collection([
                'Can you give another quote that is similar to this, if possible quote the author who wrote it, if you cant find who said it its totally okay just write it anyway',
                "I love this quote, what other quotes within the same context do you think I'd also love to hear",
                'what other popular quote similar to this can you think of.',
                'Find the author of this quote and kindly write other quotes given by this specific author'

            ]);
        }

        else if ($chatContext === OpenAiChatContexts::POEM_QUOTE->Context()){
            $prompt = new Collection([
                "Write a poem that rhymes within the context of this quote. Just write the poem dont put any summary at the end or the beginning when giving the answer,Also feel free to use emojis where you see fit. Draw inspiration from Kendrick Lamar's artistic and lyrical genius and not forgetting his catchy lyrical flow.",
                "Write a poem that rhymes within the context of this quote. Just write the poem dont put any summary at the end or the beginning when giving the answer,Also feel free to use emojis where you see fit. Draw inspiration from Eminem's lyrical ingenuity and exquisite wordplay also not forgetting the catchy lyrical flow",
                "Write a poem that rhymes within the context of this quote. Just write the poem dont put any summary at the end or the beginning when giving the answer,Also feel free to use emojis where you see fit. Draw inspiration from William's Shakespeare style of writing and artistic brilliance",
                "Write a poem that rhymes within the context of this quote. Just write the poem dont put any summary at the end or the beginning when giving the answer,Also feel free to use emojis where you see fit. Draw inspiration from William Wordsworth style of writing and ingenuity"
            ]);
        }

        else if ($chatContext === OpenAiChatContexts::POEM_JOKE->Context()){
            $prompt = new Collection([
                "Write a poem that rhymes within the context of this pun/joke. Just write the poem dont put any summary at the end or the beginning when giving the answer,Also feel free to use emojis where you see fit. Draw inspiration from Kendrick Lamar's artistic and lyrical genius and not forgetting his catchy lyrical flow.",
                "Write a poem that rhymes within the context of this pun/joke. Just write the poem dont put any summary at the end or the beginning when giving the answer,Also feel free to use emojis where you see fit. Draw inspiration from Eminem's lyrical ingenuity and exquisite wordplay also not forgetting the catchy lyrical flow",
                "Write a poem that rhymes within the context of this pun/joke. Just write the poem dont put any summary at the end or the beginning when giving the answer,Also feel free to use emojis where you see fit. Draw inspiration from William's Shakespeare style of writing and artistic brilliance",
                "Write a poem that rhymes within the context of this pun/joke. Just write the poem dont put any summary at the end or the beginning when giving the answer,Also feel free to use emojis where you see fit. Draw inspiration from William Wordsworth style of writing and ingenuity"
            ]);
        }

        return $prompt->random();
    }
}
