<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PunsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puns')->insert([
            'pun_number'=>1,
            'part_one'=> "I wear the same shoe size as my girlfriend...",
            'part_two'=>"and people say we are not solemates.",
        ]);
    }
}
