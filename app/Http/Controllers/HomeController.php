<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $totalPacientes = Paciente::all('rut')->count();
        $totalMasculino = Paciente::where('sexo', '=', 'Masculino')->count();
        $totalFemenino = Paciente::where('sexo', '=', 'Femenino')->count();

        $totalCeleste = Paciente::where('sector', '=', 'celeste')->count();
        $totalNaranjo = Paciente::where('sector', '=', 'naranjo')->count();


        return view('home', compact('totalPacientes', 'totalMasculino', 'totalFemenino', 'totalCeleste', 'totalNaranjo'));
    }
}
