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

        $davinciResponse = [];

        switch ($validatedPromptRequest['Context']) {
            case OpenAiChatContexts::FUN_FACT_CHECK->Context():
                $davinciResponse = [
                    'model' => 'text-davinci-003',
                    'prompt' => $validatedPromptRequest['Prompt'] . '.' . OpenAiChatPrompts::GetPrompts(OpenAiChatContexts::FUN_FACT_CHECK->Context()),
                    'temperature' => 0.8,
                    'max_tokens' => 500
                ];
                break;

            case OpenAiChatContexts::SIMILAR_FUN_FACT->Context():
                $davinciResponse = [
                    'model' => 'text-davinci-003',
                    'prompt' => $validatedPromptRequest['Prompt'] . '.' . OpenAiChatPrompts::GetPrompts(OpenAiChatContexts::SIMILAR_FUN_FACT->Context()),
                    'temperature' => 0.8,
                    'max_tokens' => 500
                ];
                break;

            case OpenAiChatContexts::PUN_I_DONT_GET_IT->Context():
                $davinciResponse = [
                    'model' => 'text-davinci-003',
                    'prompt' => $validatedPromptRequest['Prompt'] . '.' . OpenAiChatPrompts::GetPrompts(OpenAiChatContexts::PUN_I_DONT_GET_IT->Context()),
                    'temperature' => 0.8,
                    'max_tokens' => 500
                ];
                break;

            case OpenAiChatContexts::SIMILAR_JOKE->Context():
                $davinciResponse = [
                    'model' => 'text-davinci-003',
                    'prompt' => $validatedPromptRequest['Prompt'] . '.' . OpenAiChatPrompts::GetPrompts(OpenAiChatContexts::SIMILAR_JOKE->Context()),
                    'temperature' => 0.8,
                    'max_tokens' => 500
                ];
                break;

            case OpenAiChatContexts::EXPLAIN_QUOTE->Context():
                $davinciResponse = [
                    'model' => 'text-davinci-003',
                    'prompt' => $validatedPromptRequest['Prompt'] . '.' . OpenAiChatPrompts::GetPrompts(OpenAiChatContexts::EXPLAIN_QUOTE->Context()),
                    'temperature' => 0.8,
                    'max_tokens' => 500
                ];
                break;

            case OpenAiChatContexts::SIMILAR_QUOTES->Context():
                $davinciResponse = [
                    'model' => 'text-davinci-003',
                    'prompt' => $validatedPromptRequest['Prompt'] . '.' . OpenAiChatPrompts::GetPrompts(OpenAiChatContexts::SIMILAR_QUOTES->Context()),
                    'temperature' => 0.8,
                    'max_tokens' => 500
                ];
                break;

            case OpenAiChatContexts::POEM_JOKE->Context():
                $davinciResponse = [
                    'model' => 'text-davinci-003',
                    'prompt' => $validatedPromptRequest['Prompt'] . '.' . OpenAiChatPrompts::GetPrompts(OpenAiChatContexts::POEM_JOKE->Context()),
                    'temperature' => 0.8,
                    'max_tokens' => 500
                ];
                break;

            case OpenAiChatContexts::POEM_QUOTE->Context():
                $davinciResponse = [
                    'model' => 'text-davinci-003',
                    'prompt' => $validatedPromptRequest['Prompt'] . '.' . OpenAiChatPrompts::GetPrompts(OpenAiChatContexts::POEM_QUOTE->Context()),
                    'temperature' => 0.8,
                    'max_tokens' => 500
                ];
                break;

        }

        $result = OpenAI::completions()->create($davinciResponse);

        return response()->json([
            '_id' => Str::random(7),
            'content' => $result['choices'][0]['text']
        ]);
    }
}
