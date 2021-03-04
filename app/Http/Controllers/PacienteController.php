<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Paciente;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PacienteController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');

        $pacientes = Paciente::latest()
            ->search($q)
            ->paginate(10);

        return view('pacientes.index', compact('pacientes', 'q'));
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
