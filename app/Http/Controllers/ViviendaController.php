<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familia;
use App\Vivienda;

class ViviendaController extends Controller
{
    public function create($id)
    {
        $familia = Familia::with('vivienda')->findOrFail($id);
        $vivienda = new Vivienda;

        return view('viviendas.create', compact('familia', 'vivienda'));
    }
}
