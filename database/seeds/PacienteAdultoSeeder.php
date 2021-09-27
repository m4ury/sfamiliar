<?php

use App\Paciente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteAdultoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $pacientes = [
        array('id' => 	3	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	"A"	,	'actFisica' =>	1	),
array('id' => 	4	,	'dependencia' =>	"M"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	null	),
array('id' => 	99	,	'dependencia' =>	"G"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	null	),
array('id' => 	102	,	'dependencia' =>	"T"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"A"	,	'unipodal' =>	null	,	'actFisica' =>	null	),
array('id' => 	18	,	'dependencia' =>	"M"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	null	),
array('id' => 	48	,	'dependencia' =>	"T"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	null	),
array('id' => 	163	,	'dependencia' =>	"T"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	null	),
array('id' => 	87	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"A"	,	'unipodal' =>	"A"	,	'actFisica' =>	1	),
array('id' => 	222	,	'funcionalidad' =>	"SR"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"L"	,	'unipodal' =>	"N"	,	'actFisica' =>	1	),
array('id' => 	233	,	'dependencia' =>	"G"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	null	),
array('id' => 	235	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	1	),
array('id' => 	236	,	'funcionalidad' =>	"SR"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	null	),
array('id' => 	242	,	'dependencia' =>	"L"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	1	),
array('id' => 	279	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	1	),
array('id' => 	283	,	'dependencia' =>	"M"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	1	),
array('id' => 	976	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"A"	,	'unipodal' =>	"A"	,	'actFisica' =>	null	),
array('id' => 	322	,	'funcionalidad' =>	"SR"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	null	),
array('id' => 	341	,	'funcionalidad' =>	"SR"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	1	),
array('id' => 	1031	,	'funcionalidad' =>	"SR"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	1	),
array('id' => 	375	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	null	),
array('id' => 	407	,	'dependencia' =>	"L"	,	'maltrato' =>	null	,	'riesgoCaida' =>	null	,	'unipodal' =>	null	,	'actFisica' =>	null	),
array('id' => 	485	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"A"	,	'unipodal' =>	"N"	,	'actFisica' =>	1	),
array('id' => 	500	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"A"	,	'unipodal' =>	"A"	,	'actFisica' =>	1	),
array('id' => 	1163	,	'funcionalidad' =>	"SR"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"L"	,	'unipodal' =>	"N"	,	'actFisica' =>	null	),
array('id' => 	543	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"L"	,	'unipodal' =>	"A"	,	'actFisica' =>	null	),
array('id' => 	576	,	'dependencia' =>	"L"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"A"	,	'unipodal' =>	"A"	,	'actFisica' =>	null	),
array('id' => 	579	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"L"	,	'unipodal' =>	"A"	,	'actFisica' =>	null	),
array('id' => 	609	,	'funcionalidad' =>	"SR"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"L"	,	'unipodal' =>	"N"	,	'actFisica' =>	1	),
array('id' => 	1289	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"N"	,	'unipodal' =>	"N"	,	'actFisica' =>	null	),
array('id' => 	1305	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"N"	,	'unipodal' =>	"N"	,	'actFisica' =>	1	),
array('id' => 	763	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"L"	,	'unipodal' =>	"A"	,	'actFisica' =>	null	),
array('id' => 	1490	,	'funcionalidad' =>	"R"	,	'maltrato' =>	null	,	'riesgoCaida' =>	"N"	,	'unipodal' =>	"N"	,	'actFisica' =>	1	)
     ];
     foreach ($pacientes as $paciente) {
        Paciente::updateOrCreate(['id' => $paciente['id']], $paciente);
    }
    }
}
