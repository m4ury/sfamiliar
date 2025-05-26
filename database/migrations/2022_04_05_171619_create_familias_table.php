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
            $table->string('ficha_familiar')->unique();
            $table->string('fono')->nullable();
            $table->unsignedInteger('num_integrantes')->nullable();
            $table->enum('sector', ['SB', 'SA', 'Blanco'])->default('Blanco');
            $table->timestamps();
            $table->integer('vivienda_id')->nullable(); // Elimniar este campo si no es necesario, es solo para cargar datos anteriores
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
