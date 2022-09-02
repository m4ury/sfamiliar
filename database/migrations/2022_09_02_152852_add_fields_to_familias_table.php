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
            $table->enum('tipo_familia', ['Nuclear', 'Extensa', 'Monoparental', 'Unipersonal', 'Reconstituida']);
            $table->enum('etapa_cicloVital', ['Formacion de la pareja', 'Crianza inicial de niños', 'Fam. con hijos preescolares', 'Fam. con hijos escolares', 'Fam. con hijos adolecentes', 'Fam. plataforma de lanzam.', 'Fam. nido vacio', 'Fam. Adulto mayor']);

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
