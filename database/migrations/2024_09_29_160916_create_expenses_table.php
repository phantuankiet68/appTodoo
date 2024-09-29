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
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Khóa ngoại
            $table->date('current_date');
            $table->decimal('breakfast', 10, 2);
            $table->decimal('lunch', 10, 2);
            $table->decimal('afternoon_meal', 10, 2);
            $table->decimal('dinner', 10, 2);
            $table->decimal('coffee', 10, 2);
            $table->decimal('fuel', 10, 2);
            $table->decimal('sports', 10, 2);
            $table->decimal('e_wallet', 10, 2);
            $table->decimal('other_shopping', 10, 2);
            $table->decimal('other_expenses', 10, 2);
            $table->decimal('rent', 10, 2);
            $table->decimal('total_spending_today', 10, 2);
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
        Schema::dropIfExists('expenses');
    }
};
