<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_patologia_id')->nullable();
            $table->string('nombre_parametro');
            $table->string('valor_parametro')->nullable();
            $table->timestamps();
        });
        Schema::table('parametros', function (Blueprint $table) {
            $table->foreign('sub_patologia_id')->references('id')->on('sub_patologias')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametros');
    }
}
