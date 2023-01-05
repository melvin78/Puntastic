<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class OpenAIController extends Controller
{
    public function GetOpinionFromModel(){

        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'There are more hydrogen atoms in a teaspoon of water than there are teaspoons of water in the sea 💧. Is this true?',
            'temperature'=>0.8,
            'max_tokens'=>150
        ]);

        dd($result['choices'][0]['text']);
    }
}
