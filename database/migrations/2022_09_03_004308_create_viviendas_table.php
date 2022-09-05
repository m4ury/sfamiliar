<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViviendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viviendas', function (Blueprint $table) {
            $table->id();
            $table->integer('puntaje')->default(0);
            $table->enum('descripcion', ['casa', 'departamento', 'mejora_mediagua', 'conventillo_cité', 'callampa', 'rancho_ruca_choza']);
            $table->enum('material', ['solida', 'madera', 'ladrillo', 'desecho', 'mixto']);
            $table->enum('tenencia', ['propia', 'pagando divid.', 'arriendo', 'allegado', 'cedida']);
            $table->enum('combustible', ['gas', 'carbon', 'parafina', 'lena', 'otro']);
            $table->integer('num_piezas')->default(0);
            $table->integer('num_dormitorios')->default(0);
            $table->integer('num_camas')->default(0);
            $table->tinyint('piso_tierra')->default(0);
            $table->tinyint('electricidad')->default(0);
            $table->enum('agua_potable', ['si_dentro', 'si_sitio', 'si_acarreo', 'no_dispone']);
            $table->enum('wc', ['alcantarillado', 'fosa', 'letrina', 'poso', 'no_dispone']);
            $table->enum('ingreso', ['0_1 im', '1_2 im', '2_3 im', '3_4 im', '4 im']);
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
        Schema::dropIfExists('viviendas');
    }
}
