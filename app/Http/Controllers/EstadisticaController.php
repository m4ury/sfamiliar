<?php

namespace App\Http\Controllers;

use App\PacientePatologias;
use App\Patologia;
use Illuminate\Support\Facades\DB;
use App\Paciente;

class EstadisticaController extends Controller
{
    public function index()
    {
        $hta = Patologia::join('paciente_patologia', 'paciente_patologia.patologia_id', 'patologias.id')->where('patologias.nombre_patologia', 'HTA')->count();
        $dm2 = Patologia::join('paciente_patologia', 'paciente_patologia.patologia_id', 'patologias.id')->where('patologias.nombre_patologia', 'DM2')->count();
        $dlp = Patologia::join('paciente_patologia', 'paciente_patologia.patologia_id', 'patologias.id')->where('patologias.nombre_patologia', 'DLP')->count();

        $total_pscv = DB::table('patologias')->select('patologias.nombre_patologia',
            DB::raw('SUM(patologias.nombre_patologia'))
            ->orWhere('patologias.nombre_patologia', '=', 'HTA')
            ->orWhere('patologias.nombre_patologia', '=', 'DM2')
            ->orWhere('patologias.nombre_patologia', '=', 'DLP')
            ->join('paciente_patologia', 'paciente_patologia.patologia_id', '=', 'patologias.id')
            ->count();

        $masculino_pscv = DB::table('patologias')->select('patologias.nombre_patologia',
            DB::raw('SUM(patologias.nombre_patologia'))
            ->where('patologias.nombre_patologia', '=', 'HTA')
            ->orWhere('patologias.nombre_patologia', '=', 'DM2')
            ->orWhere('patologias.nombre_patologia', '=', 'DLP')
            ->where('pacientes.sexo', '=', 'masculino')
            ->join('paciente_patologia', 'paciente_patologia.patologia_id', '=', 'patologias.id')
            ->count('paciente_patologia.paciente_id');

        $femenino_pscv = DB::table('patologias')->select('patologias.nombre_patologia',
            DB::raw('SUM(patologias.nombre_patologia'))
            ->where('patologias.nombre_patologia', '=', 'HTA')
            ->orWhere('patologias.nombre_patologia', '=', 'DM2')
            ->orWhere('patologias.nombre_patologia', '=', 'DLP')
            ->where('pacientes.sexo', '=', 'femenino')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->count('paciente_patologia.paciente_id');

        $p_bajo = Paciente::where('riesgo_cv', '=', 'bajo')->count();
        $p_moderado = Paciente::where('riesgo_cv', '=', 'moderado')->count();
        $p_alto = Paciente::where('riesgo_cv', '=', 'alto')->count();

        return view('estadisticas.index', compact('p_bajo', 'p_moderado', 'p_alto', 'hta', 'dm2', 'dlp', 'total_pscv', 'masculino_pscv', 'femenino_pscv'));
    }
}
