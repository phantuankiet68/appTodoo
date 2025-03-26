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
        Schema::create('lesson_kanjis', function (Blueprint $table) {
            $table->id();
            $table->string('lesson', 50);
            $table->string('title', 255);
            $table->string('level', 50);
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
        Schema::table('lesson_kanjis', function (Blueprint $table) {
            //
        });
    }
};
