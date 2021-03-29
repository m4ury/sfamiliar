<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

class EstadisticaController extends Controller
{
    public function index(){
        $pacientes = Paciente::all();
        //$p_pscv = $pacientes->where()
        $p_bajo = $pacientes->where('riesgo_cv', '=', 'bajo')->count();
        $p_moderado = $pacientes->where('riesgo_cv', '=', 'moderado')->count();
        $p_alto = $pacientes->where('riesgo_cv', '=', 'alto')->count();

        return view('estadisticas.index', compact('pacientes', 'p_bajo', 'p_moderado', 'p_alto'));
    }
}
