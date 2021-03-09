<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::all();

        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.create');

    }

    public function store(PacienteRequest $request)
    {
        $paciente = Paciente::create($request->all());
        Alert::toast('Nuevo Paciente ha sido creada con exito');
        return redirect()->route('pacientes.index', compact('paciente'));

    }

    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        $controles = $paciente->controls()->latest()->get()->take(3);

        return view('pacientes.show', compact('paciente', 'controles'));
    }

    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);

        return view('pacientes.edit', compact('paciente'));
    }


    public function update(Request $request, $id)
    {
        $paciente = Paciente::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'rut' => 'required|cl_rut',
            'nombres' => 'required|string|min:3',
            'apellidoP' => 'required|string|min:3',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $paciente->update($request->all());

        return redirect('pacientes')->withToastSuccess('Paciente Actualizado con exito!');
    }

    public function destroy($id)
    {
        Paciente::destroy($id);

        return response(['data' => null], 204);
    }
}