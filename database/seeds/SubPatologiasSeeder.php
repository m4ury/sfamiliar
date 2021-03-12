<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubPatologiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_patologias')->insert(array(
            array('patologia_id'=> 1 ,'nombre_sub'=> 'rac_vigente'), array('patologia_id'=> 1, 'nombre_sub'=>'pa_menor150_90'),
            array('patologia_id'=> 1, 'nombre_sub'=>'pa_menor160_100'),
            array('patologia_id'=> 1 ,'nombre_sub'=> 'rac_vigente')
        )
        );
    }
}
