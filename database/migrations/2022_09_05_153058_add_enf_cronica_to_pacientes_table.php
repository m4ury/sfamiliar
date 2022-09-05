<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnfCronicaToPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->enum('enfCronica', ['no_informado', 'dm2', 'hta', 'alcoholismo', 'sm', 'retardo_mental', 'epilepcia', 'enf_cardiaca', 'glomerulonefritis', 'enf_pulmonar', 'otros_artritis', 'mas_una', 'no_presenta'])->nullable()->default('no_informado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            //
        });
    }
}
