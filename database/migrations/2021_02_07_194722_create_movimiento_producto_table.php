<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientoProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento_producto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movimiento_id')->nullable();
            $table->foreignId('producto_id')->nullable();
            $table->float('stock')->default(0);
            $table->timestamps();
        });

        Schema::table('movimiento_producto', function (Blueprint $table) {
            $table->foreign('movimiento_id')->references('id')->on('movimientos');
            $table->foreign('producto_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimiento_producto');
    }
}
