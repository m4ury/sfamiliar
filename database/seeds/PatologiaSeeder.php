<?php

use Illuminate\Database\Seeder;
use App\Patologia;

class PatologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patologias = [
            ['nombre_patologia' => 'HTA'], ['nombre_patologia' => 'DM2'], ['nombre_patologia' => 'DLP'], ['nombre_patologia' => 'ANTECEDENTE IAM'], ['nombre_patologia' => 'ANTECEDENTE ACV'], ['nombre_patologia' => 'ERC'], ['nombre_patologia' => 'TABAQUISMO'], ['nombre_patologia' => 'SALA ERA'], ['nombre_patologia' => 'SALUD MENTAL'], ['nombre_patologia' => 'EPILEPSIA'], ['nombre_patologia' => 'GLAUCOMA'], ['nombre_patologia' => 'ENF. PARKINSON'], ['nombre_patologia' => 'ARTROSIS RODILLA Y/O CADERA'], ['nombre_patologia' => 'ALIVIO DOLOR'], ['nombre_patologia' => 'HIPOTIROIDISMO']
        ];
        foreach ($patologias as $patologia) {
            Patologia::updateOrCreate($patologia);
        }
    }
}
