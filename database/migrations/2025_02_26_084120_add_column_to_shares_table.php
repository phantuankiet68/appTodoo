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
        Schema::table('share_nows', function (Blueprint $table) {
            $table->unsignedBigInteger('wiki_id')->nullable();
            $table->foreign('wiki_id')->references('id')->on('wiki_homes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('share_nows', function (Blueprint $table) {
            //
        });
    }
};
