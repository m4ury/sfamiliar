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
        $totalPacientes = $all->count();
        $totalFamilias = $fam->count();

        //x sexo
        $totalMasculino = $all->where('sexo', '=', 'Masculino')->count();
        $masculino2064 = $all->where('sexo', '=', 'Masculino')->get()->whereBetween('grupo', [20, 64])->count();
        $masculino65mas = $all->where('sexo', '=', 'Masculino')->get()->where('grupo', '>=', 65)->count();

        $totalFemenino = $all->where('sexo', '=', 'Femenino')->count();
        $femenino2064 = $all->where('sexo', '=', 'Femenino')->get()->whereBetween('grupo', [20, 64])->count();
        $femenino65mas = $all->where('sexo', '=', 'Femenino')->get()->where('grupo', '>=', 65)->count();

        //x sector
        $totalCeleste = $fam->where('sector', '=', 'SA')->count();
        $totalNaranjo = $fam->where('sector', '=', 'SB')->count();

        return view('home', compact(
            'totalPacientes',
            'totalMasculino',
            'totalFemenino',
            'totalCeleste',
            'totalNaranjo',
            'totalFamilias'
        ));
    }
}
