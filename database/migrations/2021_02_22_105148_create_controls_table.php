<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controls', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_control');
            $table->text('observacion')->nullable();
            $table->date('proximo_control')->nullable();
            $table->time('hora_proximoControl')->nullable();
            $table->foreignId('user_id')->unsigned()->nullable();
            $table->foreignId('paciente_id')->unsigned()->nullable();


            $table->timestamps();
        });

        Schema::table('controls', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('controls');
    }
}
