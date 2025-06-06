<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Http\Requests\FamiliaRequest;
use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familias = cache()->remember('index-familias', 10, function () {
            return Familia::with('pacientes')->get()->lazy();
        });

        return view('familias.index', compact('familias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = new Paciente;

        return view('familias.create', compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FamiliaRequest $request)
    {
        $familia = Familia::create($request->all());
        return redirect('familias')->withSuccess('Familia Creada con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $familia = Familia::with('ultimaEvaluacion')->findOrFail($id);
        $pacientes = Paciente::where('familia_id', $id)->get();
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
        $pacientes = Paciente::select(\DB::raw('CONCAT(nombres, " ", apellidoP, " - ", rut) AS full_name, id'))->whereNull('familia_id')->pluck('full_name', 'id')->lazy();

        return view('familias.edit', compact('familia', 'pacientes'));
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
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'familia' => 'string|min:4',
            'ficha_familiar' => [
                'required',
                'numeric',
                'digits_between:2,10',
                'unique:familias,ficha_familiar,' . ($familia->id ?? 'NULL') . ',id,sector,' . ($request->sector ?? $this->get('sector')),
            ],
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $familia = Familia::findOrFail($familia->id);
        $familia->update($request->all());

        //$reunion->users()->sync($request->users);
        if (isset($request->paciente_id)) {
            $paciente = Paciente::findOrFail($request->paciente_id);
            $paciente->update(['familia_id' => $familia->id]);
        }

        return redirect('familias/' . $familia->id)->withSuccess('Actualizado con exito!');
    }

    public function sinIntegrantes()
    {
        $familias = Familia::doesntHave('pacientes')
            ->select('familias.id', 'familias.familia', 'familias.ficha_familiar', 'familias.sector', 'familias.domicilio')
            ->latest('familias.familia', 'desc')
            ->get();

        return view('familias.sin_integrantes', compact('familias'));
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
