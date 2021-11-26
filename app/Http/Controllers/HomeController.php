<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Paciente;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //todos
        $all = new Paciente;
        $totalPacientes = $all->pscv()->count();

        //x sexo
        $totalMasculino = $all->pscv()->where('sexo', '=', 'Masculino')->count();
        $masculino2064 = $all->pscv()->where('sexo', '=', 'Masculino')->get()->whereBetween('grupo', [20, 64])->count();
        $masculino65mas = $all->pscv()->where('sexo', '=', 'Masculino')->get()->where('grupo', '>=', 65)->count();

        $totalFemenino = $all->pscv()->where('sexo', '=', 'Femenino')->count();
        $femenino2064 = $all->pscv()->where('sexo', '=', 'Femenino')->get()->whereBetween('grupo', [20, 64])->count();
        $femenino65mas = $all->pscv()->where('sexo', '=', 'Femenino')->get()->where('grupo', '>=', 65)->count();


        //x sector
        $totalCeleste = $all->pscv()->where('sector', '=', 'celeste')->count();
        $totalNaranjo = $all->pscv()->where('sector', '=', 'naranjo')->count();

        //x compensacion
        $compensados = $all->pscv()->where('compensado', '=', 1)->count();
        $noCompensados = $all->pscv()->where('compensado', '=', 2)->count();
        $sinInfo = $all->pscv()->where('compensado', '=', 0)->count();
        $sinInfo = $all->pscv()->where('compensado', '=', 0)->count();


        //x compensacion y riesgo

        //compensado rcv bajo
        $compensados_rBajo = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'bajo')->count();
        $compensados_rBajo1519 = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'bajo')->get()->whereBetween('grupo', [15, 19])->count();
        $compensados_rBajo2064 = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'bajo')->get()->whereBetween('grupo', [20, 64])->count();
        $compensados_rBajo65mas = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'bajo')->get()->where('grupo', '>=', 65)->count();

        //compensado rcv alto
        $compensados_rAlto = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'alto')->count();
        $compensados_rAlto1519 = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'alto')->get()->whereBetween('grupo', [15, 19])->count();
        $compensados_rAlto2064 = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'alto')->get()->whereBetween('grupo', [20, 64])->count();
        $compensados_rAlto65mas = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'alto')->get()->where('grupo', '>=', 65)->count();
        //compensado rcv moderado
        $compensados_rMod = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'moderado')->count();
        $compensados_rMod1519 = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'moderado')->get()->whereBetween('grupo', [15, 19])->count();
        $compensados_rMod2064 = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'moderado')->get()->whereBetween('grupo', [20, 64])->count();
        $compensados_rMod65mas = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'moderado')->get()->where('grupo', '>=', 65)->count();


        //no compensados
        $noCompensados_rBajo = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'bajo')->count();
        $noCompensados_rBajo1519 = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'bajo')->get()->whereBetween('grupo', [15, 19])->count();
        $noCompensados_rBajo2064 = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'bajo')->get()->whereBetween('grupo', [20, 64])->count();
        $noCompensados_rBajo65mas = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'bajo')->get()->where('grupo', '>=', 65)->count();

        $noCompensados_rMod = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'moderado')->count();
        $noCompensados_rMod1519 = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'moderado')->get()->whereBetween('grupo', [15, 19])->count();
        $noCompensados_rMod2064 = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'moderado')->get()->whereBetween('grupo', [20, 64])->count();
        $noCompensados_rMod65mas = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'moderado')->get()->where('grupo', '>=', 65)->count();

        $noCompensados_rAlto = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'alto')->count();
        $noCompensados_rAlto1519 = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'alto')->get()->whereBetween('grupo', [15, 19])->count();
        $noCompensados_rAlto2064 = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'alto')->get()->whereBetween('grupo', [20, 64])->count();
        $noCompensados_rAlto65mas = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'alto')->get()->where('grupo', '>=', 65)->count();




        $pacientes = new Paciente;
        $mas80 = $pacientes->pscv()->get()->where('grupo', '>=', 80)->count();
        $in7579 = $pacientes->pscv()->get()->whereBetween('grupo', [75, 79])->count();
        $in7074 = $pacientes->pscv()->get()->whereBetween('grupo', [70, 74])->count();
        $in6569 = $pacientes->pscv()->get()->whereBetween('grupo', [65, 69])->count();
        $in6064 = $pacientes->pscv()->get()->whereBetween('grupo', [60, 64])->count();
        $in5559 = $pacientes->pscv()->get()->whereBetween('grupo', [55, 59])->count();
        $in5054 = $pacientes->pscv()->get()->whereBetween('grupo', [50, 54])->count();
        $in4549 = $pacientes->pscv()->get()->whereBetween('grupo', [45, 49])->count();
        $in4044 = $pacientes->pscv()->get()->whereBetween('grupo', [40, 44])->count();
        $in3539 = $pacientes->pscv()->get()->whereBetween('grupo', [35, 39])->count();
        $in3034 = $pacientes->pscv()->get()->whereBetween('grupo', [30, 34])->count();
        $in2529 = $pacientes->pscv()->get()->whereBetween('grupo', [25, 29])->count();
        $in2024 = $pacientes->pscv()->get()->whereBetween('grupo', [20, 24])->count();
        $in1519 = $pacientes->pscv()->get()->whereBetween('grupo', [15, 19])->count();

        return view('home', compact(
            'totalPacientes',
            'totalMasculino',
            'totalFemenino',
            'totalCeleste',
            'totalNaranjo',
            'mas80',
            'in7579',
            'in7074',
            'in6569',
            'in6064',
            'in5559',
            'in5054',
            'in4549',
            'in4044',
            'in3539',
            'in3034',
            'in2529',
            'in2024',
            'in1519',
            'compensados',
            'noCompensados',
            'sinInfo',
            'compensados_rBajo',
            'compensados_rBajo1519',
            'compensados_rBajo2064',
            'compensados_rBajo65mas',
            'compensados_rMod',
            'compensados_rMod1519',
            'compensados_rMod2064',
            'compensados_rMod65mas',
            'compensados_rAlto',
            'compensados_rAlto1519',
            'compensados_rAlto2064',
            'compensados_rAlto65mas',
            'noCompensados_rBajo',
            'noCompensados_rBajo1519',
            'noCompensados_rBajo2064',
            'noCompensados_rBajo65mas',
            'noCompensados_rMod',
            'noCompensados_rMod1519',
            'noCompensados_rMod2064',
            'noCompensados_rMod65mas',
            'noCompensados_rAlto',
            'noCompensados_rAlto1519',
            'noCompensados_rAlto2064',
            'noCompensados_rAlto65mas',
            'femenino2064',
            'femenino65mas',
            'masculino2064',
            'masculino65mas'
        ));
    }
}
