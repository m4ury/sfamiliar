<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Paciente;

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
        // Pacientes vivos y fallecidos (solo activos)
        $totalPacientes = Paciente::where('fallecido', 0)->where('pasivo', 0)->count();
        $fallecidos = Paciente::where('fallecido', 1)->where('pasivo', 0)->count();

        // Familias
        $totalFamilias = Familia::with('pacientes')->count();

        // Por sexo y grupo etario (solo activos)
        $totalMasculino = Paciente::where('sexo', 'Masculino')->where('fallecido', 0)->where('pasivo', 0)->count();
        $masculino9 = Paciente::where('sexo', 'Masculino')->where('fallecido', 0)->where('pasivo', 0)
            ->whereRaw('TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) < 10')->count();
        $masculino1019 = Paciente::where('sexo', 'Masculino')->where('fallecido', 0)->where('pasivo', 0)
            ->whereRaw('TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) BETWEEN 10 AND 19')->count();
        $masculino2064 = Paciente::where('sexo', 'Masculino')->where('fallecido', 0)->where('pasivo', 0)
            ->whereRaw('TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) BETWEEN 20 AND 64')->count();
        $masculino65mas = Paciente::where('sexo', 'Masculino')->where('fallecido', 0)->where('pasivo', 0)
            ->whereRaw('TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) >= 65')->count();

        $totalFemenino = Paciente::where('sexo', 'Femenino')->where('fallecido', 0)->where('pasivo', 0)->count();
        $femenino9 = Paciente::where('sexo', 'Femenino')->where('fallecido', 0)->where('pasivo', 0)
            ->whereRaw('TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) < 10')->count();
        $femenino1019 = Paciente::where('sexo', 'Femenino')->where('fallecido', 0)->where('pasivo', 0)
            ->whereRaw('TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) BETWEEN 10 AND 19')->count();
        $femenino2064 = Paciente::where('sexo', 'Femenino')->where('fallecido', 0)->where('pasivo', 0)
            ->whereRaw('TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) BETWEEN 20 AND 64')->count();
        $femenino65mas = Paciente::where('sexo', 'Femenino')->where('fallecido', 0)->where('pasivo', 0)
            ->whereRaw('TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE()) >= 65')->count();

        // Por sector (solo activos)
        $totalCeleste = Familia::where('sector', 'SA')->count();
        $totalNaranjo = Familia::where('sector', 'SB')->count();

        $totalpCeleste = Paciente::where('sector', 'celeste')->where('fallecido', 0)->where('pasivo', 0)->count();
        $totalpNaranjo = Paciente::where('sector', 'naranjo')->where('fallecido', 0)->where('pasivo', 0)->count();
        $totalpBlanco = Paciente::where('sector', 'blanco')->where('fallecido', 0)->where('pasivo', 0)->count();

        $sinFamilia = Paciente::whereNull('familia_id')->where('fallecido', 0)->where('pasivo', 0)->count();
        $sinIntegrantes = Familia::doesntHave('pacientes')->count();

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
            'sinIntegrantes',
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
