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
        Schema::create('kanjis', function (Blueprint $table) {
            $table->id();
            $table->string('kanji', 10)->unique();
            $table->string('meaning_han')->nullable();
            $table->string('onyomi')->nullable();
            $table->text('compounds')->nullable();
            $table->text('related_words')->nullable();
            $table->text('example_sentence')->nullable();
            $table->text('example_meaning')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kanjis');
    }
};
