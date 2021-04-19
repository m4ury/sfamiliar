<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOtrosToControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('controls', function (Blueprint $table) {
            $table->enum('otras_enf', ['Otras respiratorias cronicas', 'Oxigeno dependiente', 'Asistencia ventilatoria no invasiva o invasiva', 'Fibrosis quistica'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('controls', function (Blueprint $table) {
            //
        });
    }
}
