<?php

namespace App\Http\Controllers;

use App\Models\FunFacts;
use App\Models\Quotes;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function index (int $id){
        return Quotes::where('quote_number',$id)->get();
    }
}
