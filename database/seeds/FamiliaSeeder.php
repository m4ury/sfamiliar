<?php

use App\Familia;
use Illuminate\Database\Seeder;

class FamiliaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $familias = [
            ['familia' => 'MORALES CUBILLOS', 'domicilio' => 'Leonera S/N', 'ficha_familiar' => '11111', 'fono' => 999999999, 'num_integrantes' => 3, 'sector' => 'SA'],
        ];

        foreach ($familias as $familia) {
            Familia::updateOrCreate($familia);
        }
    }
}
