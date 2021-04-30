<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRacVigenteToPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->date('racVigente')->nullable();
            $table->date('vfgVigente')->nullable();
            $table->date('fondoOjoVigente')->nullable();
            $table->date('ecgVigente')->nullable();
            $table->date('controlPodologico_alDia')->nullable();
            $table->date('espirometriaVigente')->nullable();
            $table->date('ldlVigente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            //
        });
    }
}
