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
            $table->date('racVigente');
            $table->date('vfgVigente');
            $table->date('fondoOjoVigente');
            $table->date('ecgVigente');
            $table->date('controlPodologico_alDia');
            $table->date('espirometriaVigente');
            $table->date('ldlVigente');
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
