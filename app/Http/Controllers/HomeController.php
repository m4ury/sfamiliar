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
        $totalPacientes = Paciente::all('rut')->count();
        $totalMasculino = Paciente::where('sexo', '=', 'Masculino')->count();
        $totalFemenino = Paciente::where('sexo', '=', 'Femenino')->count();

        //x sector
        $totalCeleste = Paciente::where('sector', '=', 'celeste')->count();
        $totalNaranjo = Paciente::where('sector', '=', 'naranjo')->count();

        $pacientes = Paciente::all();
        $mas80 = $pacientes->where('grupo','>=',80)->count();
        $in7579 = $pacientes->whereBetween('grupo',[75, 79])->count();
        $in7074 = $pacientes->whereBetween('grupo',[70, 74])->count();
        $in6569 = $pacientes->whereBetween('grupo',[65, 69])->count();
        $in6064 = $pacientes->whereBetween('grupo',[60, 64])->count();
        $in5559 = $pacientes->whereBetween('grupo',[55, 59])->count();
        $in5054 = $pacientes->whereBetween('grupo',[50, 54])->count();
        $in4549 = $pacientes->whereBetween('grupo',[45, 49])->count();
        $in4044 = $pacientes->whereBetween('grupo',[40, 44])->count();
        $in3539 = $pacientes->whereBetween('grupo',[35, 39])->count();
        $in3034 = $pacientes->whereBetween('grupo',[30, 34])->count();
        $in2529 = $pacientes->whereBetween('grupo',[25, 29])->count();
        $in2024 = $pacientes->whereBetween('grupo',[20, 24])->count();
        $in1519 = $pacientes->whereBetween('grupo',[15, 19])->count();
        $in1519Fem = $pacientes->whereBetween('grupo',[15, 19])->where('sexo', 'Femenino')->count();


        return view('home', compact('totalPacientes', 'totalMasculino', 'totalFemenino', 'totalCeleste', 'totalNaranjo', 'mas80', 'in7579', 'in7074', 'in6569', 'in6064', 'in5559', 'in5054', 'in4549', 'in4044', 'in3539', 'in3034', 'in2529', 'in2024', 'in1519', 'in1519Fem'));
    }
}
