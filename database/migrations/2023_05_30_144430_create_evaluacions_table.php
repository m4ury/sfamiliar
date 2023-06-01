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
        Schema::create('evaluacions', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_evaluacion')->nullable();
            $table->enum('resultado_evaluacion', ['Bajo', 'Medio', 'Alto'])->nullable();
            $table->string('observacion', 100)->nullable();
            $table->foreignId('familia_id')->nullable();
            $table->foreign('familia_id')->references('id')->on('familias')->onDelete('cascade');
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
        Schema::dropIfExists('evaluacions');
    }
};
