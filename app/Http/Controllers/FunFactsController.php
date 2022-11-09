<?php

namespace App\Http\Controllers;

use App\Models\FunFacts;
use Illuminate\Http\Request;

class FunFactsController extends Controller
{
    public function index(int $id)
    {
      return FunFacts::where('fun_fact_number',$id)->get();
    }

}
