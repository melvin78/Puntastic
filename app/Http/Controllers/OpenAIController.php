<?php

namespace App\Http\Controllers;

use App\Constants\OpenAiChatContexts;
use App\Constants\OpenAiChatPrompts;
use App\Http\Requests\PromptRequest;
use Illuminate\Support\Str;
use MongoId;
use OpenAI\Laravel\Facades\OpenAI;

class OpenAIController extends Controller
{


    public function GetOpinionFromModel(PromptRequest $promptRequest)
    {

        $validatedPromptRequest = $promptRequest->validated();

        $finalPrompt = [];

        switch ($validatedPromptRequest['Context']) {
            case OpenAiChatContexts::FUN_FACT_CHECK->Context():
                $finalPrompt = [
                    'model' => 'text-davinci-003',
                    'prompt' => $validatedPromptRequest['Prompt'] . '.' . OpenAiChatPrompts::GetPrompts(OpenAiChatContexts::FUN_FACT_CHECK->Context()),
                    'temperature' => 0.8,
                    'max_tokens' => 500
                ];
        }

        $result = OpenAI::completions()->create($finalPrompt);

        return response()->json([
            '_id' => Str::random(7),
            'content' => $result['choices'][0]['text']
        ]);
    }
}
