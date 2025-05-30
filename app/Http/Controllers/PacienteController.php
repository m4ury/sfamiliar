<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests\PacienteRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Artisan;

class PacienteController extends Controller
{
    public function index()
    {
        return view('pacientes.index');
    }

    public function getPacientesData()
    {
        return datatables()->of(
            Paciente::with('familia')
                ->select('pacientes.id', 'pacientes.rut', 'pacientes.nombres', 'pacientes.apellidoP', 'pacientes.apellidoM', 'pacientes.ficha', 'pacientes.fallecido', 'pacientes.fecha_fallecido', 'pacientes.sector', 'pacientes.sexo', 'pacientes.familia_id', 'pacientes.fecha_nacimiento')
        )
            ->addColumn('fullName', function ($paciente) {
                return strtoupper($paciente->nombres . ' ' . $paciente->apellidoP . ' ' . $paciente->apellidoM);
            })
            ->addColumn('edad', function ($paciente) {
                return $paciente->edad();
            })
            ->addColumn('grupoEtareo', function ($paciente) {
                $edad = $paciente->edad();
                switch (true) {
                    case $edad < 15:
                        return 'Menor de 15';
                    case $edad >= 15 && $edad <= 19:
                        return 'Entre 15 y 19';
                    case $edad >= 20 && $edad <= 24:
                        return 'Entre 20 y 24';
                    case $edad >= 25 && $edad <= 29:
                        return 'Entre 25 y 29';
                    case $edad >= 30 && $edad <= 34:
                        return 'Entre 30 y 34';
                    case $edad >= 35 && $edad <= 39:
                        return 'Entre 35 y 39';
                    case $edad >= 40 && $edad <= 44:
                        return 'Entre 40 y 44';
                    case $edad >= 45 && $edad <= 49:
                        return 'Entre 45 y 49';
                    case $edad >= 50 && $edad <= 54:
                        return 'Entre 50 y 54';
                    case $edad >= 55 && $edad <= 59:
                        return 'Entre 55 y 59';
                    case $edad >= 60 && $edad <= 64:
                        return 'Entre 60 y 64';
                    case $edad >= 65 && $edad <= 69:
                        return 'Entre 65 y 69';
                    case $edad >= 70 && $edad <= 74:
                        return 'Entre 70 y 74';
                    case $edad >= 75 && $edad <= 79:
                        return 'Entre 75 y 79';
                    default:
                        return '80 y Más';
                }
            })
            ->addColumn('fichaFamiliar', function ($paciente) {
                if ($paciente->familia) {
                    $sector = ucfirst($paciente->familia->sector); // Capitaliza el sector
                    $fichaFamiliar = $paciente->familia->ficha_familiar;
                    return "{$sector} - {$fichaFamiliar}";
                }
                return ''; // Si no tiene familia
            })
            ->addColumn('familiaId', function ($paciente) {
                return $paciente->familia ? $paciente->familia->id : null; // Devuelve el ID de la familia o null
            })
            ->make(true);
    }

    public function create(Paciente $paciente)
    {
        return view('pacientes.create', compact('paciente'));
    }

    public function store(PacienteRequest $request)
    {
        $paciente = new Paciente($request->all());
        $paciente->ingreso = $request->ingreso ?? 0;
        $paciente->prevision = $request->prevision ?? 'Fonasa';
        $paciente->profesion = $request->profesion ?? 'No infomado';
        //$paciente = Paciente::updateOrCreate($request->except('_token'));
        $paciente->save();

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
        $validator = Validator::make($request->all(), [
            'rut' => 'cl_rut',
            'nombres' => 'string|min:3',
            'apellidoP' => 'string|min:3',
            'fecha_fallecido' => 'required_if:fallecido,1,true'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all());
        $paciente->pasivo = $request->pasivo ?? 0;
        $paciente->fallecido = $request->fallecido ?? 0;
        $paciente->save();

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

    public function corregirFamilia($identificador)
    {
        // Ejecutar el command de Artisan
        Artisan::call('paciente:corregir-familia', [
            'identificador' => $identificador
        ]);

        return redirect('pacientes/' . $identificador)->withSuccess('Corregido exito!');
    }
}
