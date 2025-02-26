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
        Schema::create('view_nows', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('view_count')->default(0);
            $table->unsignedBigInteger('news_id')->nullable();
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->unsignedBigInteger('interface_id')->nullable();;
            $table->foreign('interface_id')->references('id')->on('interface_homes')->onDelete('cascade');
            $table->unsignedBigInteger('document_id')->nullable();
            $table->foreign('document_id')->references('id')->on('document_homes')->onDelete('cascade');
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
        Schema::table('view_nows', function (Blueprint $table) {
            //
        });
    }
};
