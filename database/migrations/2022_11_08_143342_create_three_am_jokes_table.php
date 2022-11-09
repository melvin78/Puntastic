<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('three_am_jokes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('3am_joke_number');
            $table->string('part_one');
            $table->string('part_two');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('three_am_jokes');
    }
};
