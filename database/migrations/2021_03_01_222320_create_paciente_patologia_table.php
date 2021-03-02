<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientePatologiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente_patologia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->nullable();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreignId('patologia_id')->nullable();
            $table->foreign('patologia_id')->references('id')->on('patologias');
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
        Schema::dropIfExists('paciente_patologia');
    }
}
