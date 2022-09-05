<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('familias', function (Blueprint $table) {
            $table->date('fecha_inscripcion')->nullable();
            $table->string('causal_eliminacion')->nullable();
            $table->date('fecha_eliminacion')->nullable();
            $table->enum('tipo_familia', ['nuclear', 'extensa', 'monoparental', 'unipersonal', 'reconstituida']);
            $table->enum('etapa_cicloVital', ['formacion_pareja', 'crianza_inicial', 'hijos_preescolares', 'hijos_escolares', 'hijos_adolecentes', 'plataforma_lanzam', 'nido_vacio', 'adulto_mayor']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('familias', function (Blueprint $table) {
            //
        });
    }
}
