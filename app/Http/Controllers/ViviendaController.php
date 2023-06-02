<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Vivienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ViviendaController extends Controller
{
    public function create($id)
    {
        $familia = Familia::with('vivienda')->findOrFail($id);
        $vivienda = new Vivienda;

        return view('viviendas.create', compact('familia', 'vivienda'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $vivienda = Vivienda::create($request->all());
        return redirect('familias/' . $vivienda->familia->id)->withSuccess('Vivienda Actualizada con exito!');
    }
}
