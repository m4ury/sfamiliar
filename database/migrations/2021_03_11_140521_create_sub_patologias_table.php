<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubPatologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_patologias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patologia_id')->nullable();
            $table->string('nombre_sub');
            $table->timestamps();
        });
        Schema::table('sub_patologias', function (Blueprint $table) {
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
        Schema::dropIfExists('sub_patologias');
    }
}
