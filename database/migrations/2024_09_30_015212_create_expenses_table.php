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
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->date('current_date');
            $table->integer('breakfast');
            $table->integer('lunch'); 
            $table->integer('afternoon_meal'); 
            $table->integer('dinner'); 
            $table->integer('coffee'); 
            $table->integer('fuel');
            $table->integer('sports');
            $table->integer('e_wallet');
            $table->integer('other_shopping');
            $table->integer('other_expenses');
            $table->integer('rent');
            $table->decimal('total_spending_today', 10, 2); 
            $table->timestamps(); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expenses');
    }
};
