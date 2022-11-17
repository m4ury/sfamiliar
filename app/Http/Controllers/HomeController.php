<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Familia;
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
        $fam = new Familia;
        $totalPacientes = $all->whereFallecido(0)->count();
        $fallecidos = $all->whereFallecido(1)->count();
        $totalFamilias = $fam->count();

        //x sexo
        $totalMasculino = $all->where('sexo', '=', 'Masculino')->where('fallecido', '=', 0)->count();
        $masculino9 = $all->where('sexo', '=', 'Masculino')->where('fallecido', '=', 0)->get()->where('grupo', '<', 10)->count();
        $masculino1019 = $all->where('sexo', '=', 'Masculino')->where('fallecido', '=', 0)->get()->whereBetween('grupo', [10, 19])->count();
        $masculino2064 = $all->where('sexo', '=', 'Masculino')->where('fallecido', '=', 0)->get()->whereBetween('grupo', [20, 64])->count();
        $masculino65mas = $all->where('sexo', '=', 'Masculino')->where('fallecido', '=', 0)->get()->where('grupo', '>=', 65)->count();

        $totalFemenino = $all->where('sexo', '=', 'Femenino')->where('fallecido', '=', 0)->count();
        $femenino9 = $all->where('sexo', '=', 'Femenino')->where('fallecido', '=', 0)->get()->where('grupo', '<', 10)->count();
        $femenino1019 = $all->where('sexo', '=', 'Femenino')->where('fallecido', '=', 0)->get()->whereBetween('grupo', [10, 19])->count();
        $femenino2064 = $all->where('sexo', '=', 'Femenino')->where('fallecido', '=', 0)->get()->whereBetween('grupo', [20, 64])->count();
        $femenino65mas = $all->where('sexo', '=', 'Femenino')->where('fallecido', '=', 0)->get()->where('grupo', '>=', 65)->count();

        //x sector
        $totalCeleste = $fam->where('sector', '=', 'SA')->count();
        $totalNaranjo = $fam->where('sector', '=', 'SB')->count();

        $totalpCeleste = $all->where('sector', '=', 'celeste')->where('fallecido', '=', 0)->count();
        $totalpNaranjo = $all->where('sector', '=', 'naranjo')->where('fallecido', '=', 0)->count();
        $totalpBlanco = $all->where('sector', '=', 'blanco')->where('fallecido', '=', 0)->count();

        $sinFamilia = $all->whereNull('familia_id')->whereFallecido(0)->count();

        return view('home', compact(
            'totalPacientes',
            'totalMasculino',
            'totalFemenino',
            'totalCeleste',
            'totalNaranjo',
            'totalFamilias',
            'totalpCeleste',
            'totalpNaranjo',
            'totalpBlanco',
            'sinFamilia',
            'masculino9',
            'masculino1019',
            'masculino2064',
            'masculino65mas',
            'femenino9',
            'femenino1019',
            'femenino2064',
            'femenino65mas',
            'fallecidos'
        ));
    }
}
