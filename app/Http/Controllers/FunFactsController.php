<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReactionRequest;
use App\Models\FunFacts;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class FunFactsController extends Controller
{
    public function index(int $id)
    {
        return FunFacts::where('fun_fact_number', $id)->get();
    }




}
