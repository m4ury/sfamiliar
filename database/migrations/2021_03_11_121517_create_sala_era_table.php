<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalaEraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sala_era', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_categoria');
            $table->foreignId('patologia_id')->nullable();
            $table->timestamps();
        });
        Schema::table('sala_era', function (Blueprint $table) {
            $table->foreign('patologia_id')->references('id')->on('patologias')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sala_era');
    }
}
