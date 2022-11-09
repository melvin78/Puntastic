<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FunFactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fun_facts')->insert([
            'fun_fact_number'=>1,
            'description'=> "There are more hydrogen atoms in a teaspoon of water than there are teaspoons of water in the sea 💧",
        ]);
    }
}
