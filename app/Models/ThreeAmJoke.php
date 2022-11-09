<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class ThreeAmJoke extends Model
{
    use HasFactory;

    protected $collection = "three_am_jokes";
}
