<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsEmpamToPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->enum('funcionalidad', ['SR', 'R', 'L', 'M', 'S', 'T'])->nullable();
                $table->enum('riesgoCaida', ['L', 'N', 'A'])->nullable();
                $table->enum('unipodal', ['N', 'A'])->nullable();
                $table->boolean('maltrato')->default(0);
                $table->boolean('actFisica')->default(0);
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
