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
        Schema::table('projects', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id'); // Thêm trường user_id
            $table->string('git')->nullable();
            $table->string('file')->nullable();
            $table->string('document')->nullable();
            $table->string('images')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Thêm khóa ngoại
        });
    }
    
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            
        });
    }
};
