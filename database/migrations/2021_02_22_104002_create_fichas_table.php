<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->unique;
            $table->text('ficha_observacion')->nullable();
            $table->foreignId('paciente_id')->unsigned()->nullable();
            $table->timestamps();
        });
        Schema::table('fichas', function (Blueprint $table) {
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onUpdate('cascade')->onDelete('set null');
        });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public
function down()
{
    Schema::dropIfExists('fichas');
}
}
