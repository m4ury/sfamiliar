<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');

        $pacientes = Paciente::latest()
            ->search($q)
            ->paginate(10);

        return view('pacientes.index', compact('pacientes', 'q'));
        //return response(['data' => $pacientes ], 200);
    }

    public function create()
    {
        return view('pacientes.create');

    }


    public function store(PacienteRequest $request)
    {
        $paciente = Paciente::create($request->all());

        return redirect()->route('pacientes.index', compact('paciente'))->with('success', 'Nuevo Paciente ha sido creado con exito');
        //return response(['data' => $paciente ], 201);

    }

    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);

        return response(['data', $paciente], 200);
    }

    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);

        return view('pacientes.edit', compact('paciente'));
    }


    public function update(PacienteRequest $request, $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all());

        return response(['data' => $paciente], 200);
    }

    public function destroy($id)
    {
        Paciente::destroy($id);

        return response(['data' => null], 204);
    }
}
