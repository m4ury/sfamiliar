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
                $table->enum('riesgo_cv', ['Bajo', 'Moderado', 'Alto'])->nullable();
                $table->enum('erc', ['sin', 'I', 'II','IIA', 'III', 'IIIA', 'IIIB', 'IIIB-IV', 'IV', 'V'])->nullable();
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
