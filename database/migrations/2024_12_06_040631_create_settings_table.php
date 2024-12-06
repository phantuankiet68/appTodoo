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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('setting')->default(0);
            $table->integer('issue')->default(0);
            $table->integer('cv')->default(0);
            $table->integer('calendar')->default(0);
            $table->integer('task')->default(0);
            $table->integer('workflow')->default(0);
            $table->integer('salary')->default(0);
            $table->integer('expense')->default(0);
            $table->integer('add_japanese')->default(0);
            $table->integer('japanese')->default(0);
            $table->integer('learn_japanese')->default(0);
            $table->integer('add_english')->default(0);
            $table->integer('english')->default(0);
            $table->integer('learn_english')->default(0);
            $table->integer('question')->default(0);
            $table->integer('word')->default(0);
            $table->integer('excel')->default(0);
            $table->integer('test_code')->default(0);
            $table->integer('component')->default(0);
            $table->integer('color')->default(0);
            $table->integer('html')->default(0);
            $table->integer('js')->default(0);
            $table->integer('vue')->default(0);
            $table->integer('react')->default(0);
            $table->integer('jquery')->default(0);
            $table->integer('angular')->default(0);
            $table->integer('php')->default(0);
            $table->integer('laravel')->default(0);
            $table->integer('node')->default(0);
            $table->integer('cshap')->default(0);
            $table->integer('java')->default(0);
            $table->integer('javascript')->default(0);
            $table->integer('ftp')->default(0);
            $table->integer('ubuntu')->default(0);
            $table->integer('mysql')->default(0);
            $table->integer('sqlsever')->default(0);
            $table->integer('mongo')->default(0);
            $table->integer('mysqlworkbench')->default(0);
            $table->integer('postgreSQL')->default(0);
            $table->integer('error')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('settings');
    }
};
