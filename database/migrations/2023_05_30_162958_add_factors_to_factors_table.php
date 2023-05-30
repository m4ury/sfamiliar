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
        Schema::table('factors', function (Blueprint $table) {
            $table->double('fBajo_1')->nullable()->default(0);
            $table->double('fBajo_2')->nullable()->default(0);
            $table->double('fBajo_3')->nullable()->default(0);
            $table->double('fBajo_4')->nullable()->default(0);
            $table->double('fBajo_puntaje', 15, 8)->nullable()->default(0);

            $table->double('fIntermedio_1')->nullable()->default(0);
            $table->double('fIntermedio_2')->nullable()->default(0);
            $table->double('fIntermedio_3')->nullable()->default(0);
            $table->double('fIntermedio_4')->nullable()->default(0);
            $table->double('fIntermedio_5')->nullable()->default(0);
            $table->double('fIntermedio_6')->nullable()->default(0);
            $table->double('fIntermedio_7')->nullable()->default(0);
            $table->double('fIntermedio_8')->nullable()->default(0);
            $table->double('fIntermedio_9')->nullable()->default(0);
            $table->double('fIntermedio_10')->nullable()->default(0);
            $table->double('fIntermedio_11')->nullable()->default(0);
            $table->double('fIntermedio_puntaje', 15, 8)->nullable()->default(0);

            $table->double('fAlto_1')->nullable()->default(0);
            $table->double('fAlto_2')->nullable()->default(0);
            $table->double('fAlto_3')->nullable()->default(0);
            $table->double('fAlto_4')->nullable()->default(0);
            $table->double('fAlto_5')->nullable()->default(0);
            $table->double('fAlto_6')->nullable()->default(0);
            $table->double('fAlto_7')->nullable()->default(0);
            $table->double('fAlto_8')->nullable()->default(0);
            $table->double('fAlto_9')->nullable()->default(0);
            $table->double('fAlto_10')->nullable()->default(0);
            $table->double('fAlto_11')->nullable()->default(0);
            $table->double('fAlto_puntaje', 15, 8)->nullable()->default(0);

            $table->double('fProtect_1')->nullable()->default(0);
            $table->double('fProtect_2')->nullable()->default(0);
            $table->double('fProtect_3')->nullable()->default(0);
            $table->double('fProtect_4')->nullable()->default(0);
            $table->double('fProtect_5')->nullable()->default(0);
            $table->double('fProtect_6')->nullable()->default(0);
            $table->double('fProtect_7')->nullable()->default(0);
            $table->double('fProtect_8')->nullable()->default(0);
            $table->double('fProtect_9')->nullable()->default(0);
            $table->double('fProtect_10')->nullable()->default(0);
            $table->double('fProtect_11')->nullable()->default(0);
            $table->double('fProtect_puntaje', 15, 8)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factors', function (Blueprint $table) {
            //
        });
    }
};
