<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class FunFacts extends Model
{
    use HasFactory;

    protected $collection = "fun_facts";

    protected $fillable = [
        // other fillable attributes
        'fun_fact_number',
    ];
}
