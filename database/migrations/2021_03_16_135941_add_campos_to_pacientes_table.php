<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposToPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
                $table->enum('riesgo_cv', ['Bajo', 'Medio', 'Alto'])->nullable();
                $table->enum('erc', ['sin', 'I', 'II', 'IIIA', 'IIIB', 'IV', 'V'])->nullable();
                $table->boolean('compensado')->default(0);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
