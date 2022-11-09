<?php

namespace App\Http\Controllers;

use App\Models\FunFacts;
use Illuminate\Http\Request;

class FunFactsController extends Controller
{
    public function index($id)
    {
      return FunFacts::all();
    }

}
