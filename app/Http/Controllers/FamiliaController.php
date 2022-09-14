<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Http\Requests\FamiliaRequest;
use App\Paciente;
use Illuminate\Http\Request;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familias = Familia::with('pacientes')->orderBy('ficha_familiar', 'desc')->get();

        return view('familias.index', compact('familias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('familias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FamiliaRequest $request)
    {

        //dd($request->all());
        $familia = Familia::create($request->all());
       // $familia->familia = $request->familia.' '.$request->familia2;
        //$familia->save();
        //Alert::success('Nuevo Paciente ha sido cread@ con exito');
        return redirect('familias')->withSuccess('Familia Creada con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function show(Familia $familia)
    {
        $familia = Familia::findOrFail($familia->id);
        $pacientes = $familia->pacientes;
        return view('familias.show', compact('familia', 'pacientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function edit(Familia $familia)
    {
        $pacients = Paciente::select('rut', 'nombres', 'apellidoP', 'apellidoM')->orderBy('apellidoP', 'desc')->get();

        return view('familias.edit', compact('familia', 'pacients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Familia $familia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Familia  $familia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Familia $familia)
    {
        //
    }
}
