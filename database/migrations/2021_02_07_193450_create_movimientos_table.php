<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->string('movimiento_descripcion');
            $table->date('fecha_movimiento');
            $table->string('observacion')->nullable();
            $table->enum('estado', ['Pagado' => 'pagado', 'Pendiente' => 'pendiente', 'Anulado' => 'anulado']);
            $table->float('precio');
            $table->float('recargo');
            $table->foreignId('tipo_id')->nullable();
            $table->foreignId('cliente_id')->nullable();
            $table->foreignId('proveedor_id')->nullable();

            $table->timestamps();
        });

        Schema::table('movimientos', function (Blueprint $table) {
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('proveedor_id')->references('id')->on('proveedors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
}
