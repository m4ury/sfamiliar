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
        Schema::table('familias', function (Blueprint $table) {
            $table->boolean('plan_intervencion')->nullable()->default(false);
            $table->enum('plan_intervencion_descripcion', ['Familiar postrado', 'Estudio de familia', 'Familiar con cuidados paliativos', 'Otros'])->nullable();
            $table->date('plan_intervencion_fecha')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('familias', function (Blueprint $table) {
            //
        });
    }
};
