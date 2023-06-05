<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\PacienteRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::with('familia')->select('pacientes.fallecido', 'pacientes.familia_id', 'pacientes.sexo', 'pacientes.id', 'pacientes.nombres', 'pacientes.apellidoP', 'pacientes.apellidoM', 'pacientes.rut', 'pacientes.ficha', 'pacientes.sector', 'pacientes.fecha_nacimiento', 'pacientes.fecha_fallecido')->latest('pacientes.familia_id', 'desc')
            ->get();

        return view('pacientes.index', compact('pacientes'));
    }

    public function create(Paciente $paciente)
    {
        return view('pacientes.create', compact('paciente'));
    }

    public function store(PacienteRequest $request)
    {
        Paciente::create($request->all());
        return redirect('pacientes')->withSuccess('Paciente Cread@ con exito!');
    }

    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.show', compact('paciente'));
    }

    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        //$familias = Familia::all();
        return view('pacientes.edit', compact('paciente'));
    }


    public function update(Request $request, $id)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'rut' => 'cl_rut',
            'nombres' => 'string|min:3',
            'apellidoP' => 'string|min:3',
            'fecha_fallecido' => Rule::requiredIf($request->fallecido == 1),
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all());

        return redirect('pacientes/' . $id)->withSuccess('Paciente Actualizado con exito!');
    }

    public function eliminarInt(Request $request, $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->familia_id = null;
        $paciente->save();

        return redirect()->back()->withSuccess('Familia Actualizada con exito!');
    }

    public
    function destroy($id)
    {
        Paciente::destroy($id);
        return response(['data' => null], 204);
    }

    public function fallecidos()
    {
        $pacientes = Paciente::with('familia')
            ->select('pacientes.fallecido', 'pacientes.familia_id', 'pacientes.sexo', 'pacientes.id', 'pacientes.nombres', 'pacientes.apellidoP', 'pacientes.apellidoM', 'pacientes.rut', 'pacientes.ficha', 'pacientes.sector', 'pacientes.fecha_nacimiento', 'pacientes.fecha_fallecido')
            ->whereNotNull('fecha_fallecido')
            ->latest('pacientes.apellidoP', 'desc')
            ->get();

        return view('pacientes.fallecidos', compact('pacientes'));
    }

    public function blancos()
    {
        $pacientes = Paciente::select('fallecido', 'sexo', 'id', 'nombres', 'apellidoP', 'apellidoM', 'rut', 'ficha', 'sector', 'fecha_nacimiento')
            ->where('sector', 'blanco')
            ->whereFallecido(0)
            ->latest('apellidoP', 'desc')
            ->get();

        return view('pacientes.blancos', compact('pacientes'));
    }

    public function sinFamilia()
    {
        $pacientes = Paciente::select('fallecido', 'sexo', 'id', 'nombres', 'apellidoP', 'apellidoM', 'rut', 'ficha', 'sector', 'fecha_nacimiento')
            ->whereNull('familia_id')
            ->whereFallecido(0)
            ->latest('apellidoP', 'desc')
            ->get();

        return view('pacientes.sin_familia', compact('pacientes'));
    }
}
