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
        /*DB::table('sub_patologias')->insert(array(
            array('patologia_id'=> 1 ,'nombre_sub'=> 'rac_vigente'), array('patologia_id'=> 1, 'nombre_sub'=>'pa_menor150_90'),
            array('patologia_id'=> 1, 'nombre_sub'=>'pa_mayor160_100')
        ));*/
        /*DB::table('sub_patologias')->insert(array(
                array('patologia_id'=> 2 ,'nombre_sub'=> 'hba1c_menor7_porc'), array('patologia_id'=> 2, 'nombre_sub'=>'hba1c_mayorIgual9_porc'), array('patologia_id'=> 2, 'nombre_sub'=>'ldl_menor100'),
                array('patologia_id'=> 2 ,'nombre_sub'=> 'rac_vigente'), array('patologia_id'=> 2 ,'nombre_sub'=> 'vfg_vigente'), array('patologia_id'=> 2 ,'nombre_sub'=> 'fondo_ojo_vigente'), array('patologia_id'=> 2 ,'nombre_sub'=> 'ecg_vigente'), array('patologia_id'=> 2 ,'nombre_sub'=> 'uso_insulina'), array('patologia_id'=> 2 ,'nombre_sub'=> 'ieca_ara2'), array('patologia_id'=> 2 ,'nombre_sub'=> 'ldl_vigente'), array('patologia_id'=> 2 ,'nombre_sub'=> 'evaluacion_pie'), array('patologia_id'=> 2 ,'nombre_sub'=> 'amputacion_pie_diab'), array('patologia_id'=> 2 ,'nombre_sub'=> 'ctrl_podologo'), array('patologia_id'=> 2 ,'nombre_sub'=> 'ulcerasActivas_xTipo_curacion')
            )*/
        DB::table('sub_patologias')->insert(array(
            array('patologia_id' => 3, 'nombre_sub' => 'ldl'), array('patologia_id' => 4, 'nombre_sub' => 'aspirina'), array('patologia_id' => 4, 'nombre_sub' => 'estatinas'), array('patologia_id' => 5, 'nombre_sub' => 'aspirina'), array('patologia_id' => 5, 'nombre_sub' => 'estatinas'), array('patologia_id' => 8, 'nombre_sub' => 'asma_clasif'), array('patologia_id' => 8, 'nombre_sub' => 'asma_nivel_control'), array('patologia_id' => 8, 'nombre_sub' => 'epoc_clasif'), array('patologia_id' => 8, 'nombre_sub' => 'epoc_nivel_control'), array('patologia_id' => 8, 'nombre_sub' => 'espirometria_vigente')
        ));
    }
}
