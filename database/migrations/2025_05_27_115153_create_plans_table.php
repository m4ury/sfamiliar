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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->boolean('ingreso_plan')->nullable()->default(false);
            $table->string('observacion_plan')->nullable()->comment('Observaciones del plan');
            $table->date('fecha_ingreso')->nullable()->comment('Fecha de ingreso plan');
            $table->enum('tipo_plan', [
                'Integrante de la familia postrado',
                'Integrante de la familia con cuidados paliativos',
                'Estudio de Familia',
                'Otros'
            ])->nullable()->comment('Tipo de plan');
            $table->boolean('egreso_plan')->nullable()->default(false);
            $table->enum('motivo_egreso', [
                'ALta' => 'Alta por cumplir plan de intervencion',
                'Traslado' => 'Traslado de establecimiento',
                'Derivacion' => 'Derivacion por complegidad del caso',
                'Abandono' => 'Por abandono',
            ])->nullable()->comment('Motivo de egreso del plan');
            $table->date('fecha_egreso')->nullable()->comment('Fecha de egreso del plan');
            $table->foreignId('familia_id')->comment('ID de la familia asociada al plan');
            $table->foreign('familia_id')->references('id')->on('familias')->onDelete('cascade')->comment('ID de la familia asociada al plan');
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
        Schema::dropIfExists('plans');
    }
};
