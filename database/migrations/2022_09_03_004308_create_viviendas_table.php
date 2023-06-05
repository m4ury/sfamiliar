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
            $table->enum('tipo_vivienda', ['casa', 'departamento', 'mejora_mediagua', 'choza'])->nullable();
            $table->enum('material', ['solida', 'madera', 'ladrillo', 'mixto'])->nullable();
            $table->enum('tenencia', ['propia', 'dividendo', 'arriendo', 'allegado', 'cedida'])->nullable();
            $table->enum('tenencia_sitio', ['propia', 'dividendo', 'arriendo', 'allegado', 'cedida'])->nullable();
            $table->enum('calefaccion', ['gas', 'carbon', 'parafina', 'lena', 'otro'])->nullable();
            $table->enum('conservacion', ['buen_estado', 'mal_estado', 'no_informado'])->nullable();
            $table->integer('num_piezas')->default(0);
            $table->integer('num_dormitorios')->default(0);
            $table->integer('num_camas')->default(0);
            $table->enum('cocina', ['gas', 'lena', 'otro'])->nullable();
            $table->enum('luz', ['electrica', 'generador', 'cedida'])->nullable();
            $table->string('basura')->nullable();
            $table->string('animales')->nullable();
            $table->enum('agua', ['potable', 'camion_algibe', 'noria', 'cedida'])->nullable();
            $table->enum('excretas', ['alcantarillado', 'fosa', 'poso', 'no_dispone'])->nullable();
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
