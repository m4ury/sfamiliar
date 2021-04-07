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
        //dd($all->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->join('paciente_patologia'));
        /*{"id":1,"nombre_patologia":"HTA","descripcion_patologia":null,"created_at":"2021-03-04T16:36:29.000000Z","updated_at":"2021-03-04T16:36:29.000000Z","color":"danger","pivot":{"paciente_id":1,"patologia_id":1}},*/
        //hta todos
        $hta = DB::table('pacientes')->distinct('paciente_patologia.id', 'pacientes.rut')
            ->where('patologias.nombre_patologia', '=', 'hta')
            ->whereNotIn('patologias.nombre_patologia', ['dlp', 'dm2'])
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->count();
        //dm2 todos
        $dm2 = DB::table('pacientes')->select('pacientes.rut')
            /* DB::raw('SUM(distinct(paciente_patologia.paciente_id'))*/
            ->where('patologias.nombre_patologia', '=', 'DM2')
            ->distinct()
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->count('pacientes.rut');

        //dlp todos
        $dlp = DB::table('pacientes')->select('pacientes.rut',
            DB::raw('SUM(distinct(paciente_patologia.paciente_id'))
            ->where('patologias.nombre_patologia', '=', 'DLP')
            ->distinct()
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->count('pacientes.rut');

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
            ->where('pacientes.sexo', '=', 'Masculino')
            ->whereIn('patologias.nombre_patologia', ['HTA', 'DLP', 'DM2'])
            ->distinct()
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->count('pacientes.rut');


        $f_pscv = DB::table('pacientes')->select(
            DB::raw('SUM(distinct(paciente_patologia.paciente_id'))
            ->where('pacientes.sexo', '=', 'Femenino')
            ->whereIn('patologias.nombre_patologia', ['HTA', 'DLP', 'DM2'])
            ->distinct()
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->count('pacientes.rut');

        //riesgo bajo todos
        $p_bajo = $all->where('riesgo_cv', '=', 'Bajo')->count();
        //masculino
        $p_bajoM = $all->where('riesgo_cv', '=', 'Bajo')->where('sexo', '=', 'Masculino')->count();
        //femenino
        $p_bajoF = $all->where('riesgo_cv', '=', 'Bajo')->where('sexo', '=', 'Femenino')->count();

        //riesgo moderado todos
        $p_moderado = $all->where('riesgo_cv', '=', 'Medio')->count();
        $p_moderadoM =  $all->where('riesgo_cv', '=', 'Medio')->where('sexo', '=', 'Masculino')->count();
        $p_moderadoF = $all->where('riesgo_cv', '=', 'Medio')->where('sexo', '=', 'Femenino')->count();

        //riesgo alto todos
        $p_alto = $all->where('riesgo_cv', '=', 'Alto')->count();
        $p_altoM = $all->where('riesgo_cv', '=', 'Alto')->where('sexo', '=', 'Masculino')->count();
        $p_altoF = $all->where('riesgo_cv', '=', 'Alto')->where('sexo', '=', 'Femenino')->count();

        return view('estadisticas.index', compact('total_pscv', 'm_pscv', 'f_pscv', 'p_bajo', 'p_moderado', 'p_alto', 'p_bajoM','p_bajoF', 'p_moderadoM', 'p_moderadoF', 'p_altoM', 'p_altoF', 'hta', 'dm2', 'dlp')
        );
    }
}
