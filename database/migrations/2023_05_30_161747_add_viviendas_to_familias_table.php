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
        Schema::table('viviendas', function (Blueprint $table) {
            $table->foreignId('familia_id')->nullable();
            $table->foreign('familia_id')->references('id')->on('familias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('familias', function (Blueprint $table) {
            //
        });
    }
};
