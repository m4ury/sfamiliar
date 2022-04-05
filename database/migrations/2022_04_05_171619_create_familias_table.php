<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->id();
            $table->string('familia');
            $table->string('domicilio');
            $table->int('ficha_familiar')->unique();
            $table->string('fono')->nullable();
            $table->string('fono');
            $table->enum('sector', ['Naranjo'=>'naranjo', 'Celeste'=>'celeste', 'Blanco'=>'blanco']);
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
        Schema::dropIfExists('familias');
    }
}
