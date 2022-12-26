<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReactionRequest;
use App\Models\FunFacts;
use App\Models\Puns;
use App\Models\Quotes;
use App\Models\ThreeAmJoke;
use Illuminate\Http\Request;

class ReactionController extends Controller
{
    public function UpdateFunFactsReaction(ReactionRequest $reactionRequest)
    {
        $validatedReactionRequest = $reactionRequest->validated();

        $emoji = $validatedReactionRequest["reaction"];
        $parsed_emoji = html_entity_decode($emoji, ENT_QUOTES, 'UTF-8');

        if ($validatedReactionRequest["action"] === "add") {
            return FunFacts::where('_id', $validatedReactionRequest["identifier"])
                ->push('reactions.' . $parsed_emoji, $validatedReactionRequest["user"], true);
        } else {
            return FunFacts::where('_id', $validatedReactionRequest["identifier"])
                ->pull('reactions.' . $parsed_emoji, $validatedReactionRequest["user"], true);
        }

    }

    public function UpdatePunsReaction(ReactionRequest $reactionRequest)
    {
        $validatedReactionRequest = $reactionRequest->validated();

        $emoji = $validatedReactionRequest["reaction"];
        $parsed_emoji = html_entity_decode($emoji, ENT_QUOTES, 'UTF-8');

        if ($validatedReactionRequest["action"] === "add") {
            return Puns::where('_id', $validatedReactionRequest["identifier"])
                ->push('reactions.' . $parsed_emoji, $validatedReactionRequest["user"], true);
        } else {
            return Puns::where('_id', $validatedReactionRequest["identifier"])
                ->pull('reactions.' . $parsed_emoji, $validatedReactionRequest["user"], true);
        }
    }

    public function UpdateThreeAmJokeReaction(ReactionRequest $reactionRequest)
    {
        $validatedReactionRequest = $reactionRequest->validated();

        $emoji = $validatedReactionRequest["reaction"];
        $parsed_emoji = html_entity_decode($emoji, ENT_QUOTES, 'UTF-8');

        if ($validatedReactionRequest["action"] === "add") {
            return ThreeAmJoke::where('_id', $validatedReactionRequest["identifier"])
                ->push('reactions.' . $parsed_emoji, $validatedReactionRequest["user"], true);
        } else {
            return ThreeAmJoke::where('_id', $validatedReactionRequest["identifier"])
                ->pull('reactions.' . $parsed_emoji, $validatedReactionRequest["user"], true);
        }
    }

    public function UpdateQuotesReaction(ReactionRequest $reactionRequest)
    {
        $validatedReactionRequest = $reactionRequest->validated();

        $emoji = $validatedReactionRequest["reaction"];
        $parsed_emoji = html_entity_decode($emoji, ENT_QUOTES, 'UTF-8');

        if ($validatedReactionRequest["action"] === "add") {
            return Quotes::where('_id', $validatedReactionRequest["identifier"])
                ->push('reactions.' . $parsed_emoji, $validatedReactionRequest["user"], true);
        } else {
            return Quotes::where('_id', $validatedReactionRequest["identifier"])
                ->pull('reactions.' . $parsed_emoji, $validatedReactionRequest["user"], true);
        }
    }
}
