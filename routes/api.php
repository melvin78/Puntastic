<?php

use App\Http\Controllers\FunFactsController;
use App\Http\Controllers\OpenAIController;
use App\Http\Controllers\PunsController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\ThreeAmJokeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::controller(FunFactsController::class)->group(function (){
    Route::get('/fun-facts/{id}','index');
    Route::post('/update-message-reaction/{id}/{userId}','updateReactions');
    Route::get('/tes','test');
});

Route::controller(PunsController::class)->group(function (){
    Route::get('/puns/{id}','index');
});

Route::controller(QuotesController::class)->group(function (){
    Route::get('/quotes/{id}','index');
});

Route::controller(ThreeAmJokeController::class)->group(function (){
    Route::get('/three-am/{id}','index');
});


Route::controller(ReactionController::class)->group(function (){
    Route::post('/update-fun-fact-reaction','UpdateFunFactsReaction');
    Route::post('/update-puns-reaction','UpdatePunsReaction');
    Route::post('/update-three-am-joke-reaction','UpdateThreeAmJokeReaction');
    Route::post('/update-quotes-reaction','UpdateQuotesReaction');
});


Route::controller(OpenAIController::class)->group(function (){
    Route::post('/chat-gpt','GetOpinionFromModel');
});
