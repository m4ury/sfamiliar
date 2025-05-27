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
        Schema::table('pacientes', function (Blueprint $table) {
            $table->boolean('pasivo')->nullable()->default(false)->comment('Indica si el paciente está inactivo');
            $table->enum('motivo_pasivo', [
                'Cambio de domicilio',
                'Otro establecimiento',
                'Otro'
            ])->nullable()->default(null)->after('pasivo')->comment('Motivo por el cual el paciente se volvió inactivo');
            $table->dateTime('fecha_pasivo')->nullable()->after('motivo_pasivo')->comment('Fecha en la que el paciente se volvió inactivo');
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
};
