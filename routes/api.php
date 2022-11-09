<?php

use App\Http\Controllers\FunFactsController;
use App\Http\Controllers\PunsController;
use App\Http\Controllers\QuotesController;
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


