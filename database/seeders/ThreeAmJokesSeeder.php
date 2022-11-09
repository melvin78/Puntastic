<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThreeAmJokesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('three_am_jokes')->insert([
            '3am_joke_number'=>1,
            'part_one'=> "what do gay horses eat?",
            'part_two'=>"haaaaaaaaaaaay",
        ]);
    }
}
