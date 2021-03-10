<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacientePatologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paciente_patologia')->insert(array(
            array('paciente_id' => 	1, 'patologia_id' => 3),array('paciente_id' => 	1, 'patologia_id' => 13), array('paciente_id' => 	1, 'patologia_id' => 1)
        ));
    }
}
