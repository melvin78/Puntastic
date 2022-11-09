<?php

namespace App\Http\Controllers;

use App\Models\FunFacts;
use App\Models\ThreeAmJoke;
use Illuminate\Http\Request;

class ThreeAmJokeController extends Controller
{
    public function index($id){
        return ThreeAmJoke::where('three_am_joke_number',$id)->get();
    }
}
