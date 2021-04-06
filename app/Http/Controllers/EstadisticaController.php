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
        $all = Paciente::all();
        /*//hta todos
        $hta = Patologia::join('paciente_patologia', 'paciente_patologia.patologia_id', 'patologias.id')
            ->where('patologias.nombre_patologia', 'HTA')->count();
        //dm2 todos
        $dm2 = Patologia::join('paciente_patologia', 'paciente_patologia.patologia_id', 'patologias.id')
            ->where('patologias.nombre_patologia', 'DM2')->count();

        //dlp todos
        $dlp = Patologia::join('paciente_patologia', 'paciente_patologia.patologia_id', 'patologias.id')
            ->where('patologias.nombre_patologia', 'DLP')->count();*/

        //pscv todos
        $total_pscv = DB::table('pacientes')->select(
            DB::raw('SUM(distinct(paciente_patologia.paciente_id'))
            ->whereIn('patologias.nombre_patologia', ['HTA', 'DLP', 'DM2'])
            ->distinct()
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->count('pacientes.rut');

        $m_pscv = DB::table('pacientes')->select(
            DB::raw('SUM(distinct(paciente_patologia.paciente_id'))
            ->where('pacientes.sexo', '=', 'masculino')
            ->whereIn('patologias.nombre_patologia', ['HTA', 'DLP', 'DM2'])
            ->distinct()
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->count('pacientes.rut');


        $f_pscv = DB::table('pacientes')->select(
            DB::raw('SUM(distinct(paciente_patologia.paciente_id'))
            ->where('pacientes.sexo', '=', 'femenino')
            ->whereIn('patologias.nombre_patologia', ['HTA', 'DLP', 'DM2'])
            ->distinct()
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->count('pacientes.rut');

        /*//riesgo bajo todos
        $p_bajo = Paciente::where('riesgo_cv', '=', 'bajo')->count();
        //masculino
        $p_bajoM = Paciente::where('riesgo_cv', '=', 'bajo')->where('sexo', '=', 'masculino')->count();
        //femenino
        $p_bajoF = Paciente::where('riesgo_cv', '=', 'bajo')->where('sexo', '=', 'femenino')->count();


        //riesgo moderado todos
        $p_moderado = Paciente::where('riesgo_cv', '=', 'moderado')->count();

        //riesgo alto todos
        $p_alto = Paciente::where('riesgo_cv', '=', 'alto')->count();


        $p_pscvM = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('patologias.nombre_patologia', ['dm2', 'hta', 'dlp'])->distinct()->count();

        $p_pscvF = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->where('pacientes.sexo', '=', 'femenino')->where('patologias.nombre_patologia', '=', 'dm2')->orWhere('patologias.nombre_patologia', '=', 'hta')->orWhere('patologias.nombre_patologia', '=', 'dlp')->distinct()->count();*/

        return view('estadisticas.index', compact('total_pscv', 'm_pscv', 'f_pscv')
        );
    }
}
