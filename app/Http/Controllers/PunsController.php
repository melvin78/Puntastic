<?php

namespace App\Http\Controllers;

use App\Models\FunFacts;
use App\Models\Puns;
use Illuminate\Http\Request;

class PunsController extends Controller
{
    public function index(int $id){
        return Puns::where('pun_number',$id)->get();
    }
}
