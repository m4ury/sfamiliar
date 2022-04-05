<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('familia_id')->nullable();
            $table->string('rut')->unique();
            $table->enum('sexo', ['Masculino', 'Femenino', 'Otros']);
            $table->string('nombres');
            $table->string('apellidoP');
            $table->string('apellidoM')->nullable();
            $table->unsignedInteger('ficha')->nullable()->unique();
            $table->date('fecha_nacimiento');
            $table->string('direccion');
            $table->enum('comuna', ['Cauquenes', 'Chanco', 'Pelluhue', 'Curico', 'Hualane', 'Licanten', 'Molina', 'Rauco', 'Romeral', 'Sgda Familia', 'Teno', 'Vichuquen', 'Linares', 'Colbun', 'Longabi', 'Parral', 'Retiro', 'San Javier', 'Villa Alegre', 'Yerbas Buenas', 'Talca', 'Constitucion', 'Empedrado', 'Maule', 'Pelarco', 'Pencahue', 'Rio Claro', 'San Clemente', 'San Rafael', 'Curepto'])->nullable();
            $table->string('telefono')->nullable();
            $table->enum('sector', ['Naranjo'=>'naranjo', 'Celeste'=>'celeste', 'Blanco'=>'blanco']);
            $table->boolean('migrante')->default(0);
            $table->boolean('pueblo_originario')->default(0);
            $table->enum('e_civil', ['Soltera (o)', 'Casada (o)', 'Divorciada (o)', 'Viuda (o)'])->default('Soltera (o)');
            $table->enum('parentesco', ['Esposa (o)', 'Pareja', 'Papá', 'Mamá', 'Hermana (o)', 'Hija (o)', 'Abuela (o)', 'Tia (o)', 'Prima (o)', 'Suegra (o)', 'Nuera', 'Yerno', 'Cuñada (o)', 'Sobrina (o)', 'Nieta (o)', 'Bisnieta (o)', 'Hijastra (o)', 'Otros'])->default('Otros');
            $table->boolean('ingreso')->default(0);
            $table->enum('prevision', ['Fonasa', 'Isapre', 'Dipreca', 'PRAIS', 'PRAIS-ISAPRE', 'Sin prevision'])->default('Sin prevision');
            $table->enum('escolaridad', ['Basica Completa', 'Basica Incompleta', 'Media Completa', 'Media Incompleta', 'Superior Completa', 'Superior Incompleta', 'Pre-Escolar', 'Tec-Superior Completa', 'Tec-Superior Incompleta', 'Sin Escolaridad'])->default('Sin Escolaridad');
            $table->string('profesion')->nullable();
            $table->timestamps();
        });

        Schema::table('pacientes', function (Blueprint $table) {
            $table->foreign('familia_id')->references('id')->on('familias')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
