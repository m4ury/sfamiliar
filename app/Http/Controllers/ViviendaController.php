<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Vivienda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ViviendaController extends Controller
{
    public function crea($id)
    {
        $familia = Familia::findOrFail($id);
        $vivienda = new Vivienda;

        return view('viviendas.create', compact('familia', 'vivienda'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $vivienda = new Vivienda($request->all());
        $vivienda->luz = 0 ? null : true;
        $vivienda->save();
        return redirect('familias/' . $vivienda->familia->id)->withSuccess('Vivienda creada con exito!');
    }

    public function edit($id)
    {
        $vivienda = Vivienda::findOrFail($id);
        $familia = Familia::findOrFail($vivienda->familia->id);
        return view('viviendas.edit', compact('vivienda', 'familia'));
    }

    public function update(Request $request, $id)
    {
        $vivienda = Vivienda::findOrFail($id);
        $familia = Familia::findOrFail($vivienda->familia_id);
        $vivienda->update($request->all());
        $vivienda->save();

        return redirect('familias/' . $request->familia_id)->withSuccess('Familia actualizado con exito!');
    }
}
