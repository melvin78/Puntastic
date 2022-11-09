<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quotes')->insert([
            'quote_number'=>1,
            'description'=> "Give me 6 hours ⌚ to chop 🪓 a tree🌳, i will spend the first 4 sharpening my axes.",
            'quoter'=>'Abe Lincoln'
        ]);
    }
}
