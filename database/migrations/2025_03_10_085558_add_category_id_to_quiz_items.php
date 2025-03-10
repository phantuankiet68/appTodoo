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
        Schema::table('quiz_items', function (Blueprint $table) {

            $table->unsignedBigInteger('quiz_category_id')->nullable()->after('id');
            $table->foreign('quiz_category_id')->references('id')->on('quiz_categories')->onDelete('cascade');
        });
    
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quiz_items', function (Blueprint $table) {
            //
        });
    }
};
