<?php

namespace App\Http\Controllers;

use App\Control;
use App\Paciente;
use App\Patologia;
use Illuminate\Http\Request;
use App\Http\Requests\ControlRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Alert;

class ControlController extends Controller
{
    public function index()
    {
        $controles = Control::all();
        return view('controles.index', compact('controles'));
    }

    public function controlsPcte($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('controles.pcte', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $paciente = Paciente::with('patologias')->findOrFail($id);
        $pacientes = new Paciente;
        return view('controles.create', compact('paciente', 'pacientes'));
    }


    public function store(ControlRequest $request)
    {
        //dd($request->all());
        $control = new Control($request->except('_token'));
        $control->user_id = Auth::user()->id;
        $control->paciente_id = $request->paciente_id;
        $control->save();

        return redirect('pacientes/' . $request->paciente_id)->withSuccess('Control creado con exito!');
    }

    public function show($id)
    {
        $control = Control::findOrFail($id);
        return response(['data', $control], 200);
    }


    public function edit($id)
    {
        $control = Control::findOrFail($id);
        return view('controles.edit', compact('control'));
    }


    public function update(Request $request, $id)
    {
        $control = Control::findOrFail($id);
        $control->update($request->all());
        return redirect('controles-all')->withSuccess('Control actualizado con exito!');
    }

    public function destroy($id)
    {
        Control::destroy($id);
        return redirect('controles-all')->withErrors('Control eliminado con exito!');
    }
}
