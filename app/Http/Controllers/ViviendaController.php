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
        $vivienda->luz = $request->luz == null ? 0 : true;
        $vivienda->save();
        return redirect('familias/' . $vivienda->familia->id)->withSuccess('Vivienda creada con exito!');
    }

    public function edit(Vivienda $vivienda, Familia $familia)
    {
        return view('viviendas.edit', compact('vivienda', 'familia'));
    }
}
