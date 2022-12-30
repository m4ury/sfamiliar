<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Paciente;
use App\Familia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PacienteController extends Controller
{
    public function index()
    {
        $pacientes = Paciente::with('familia')->select('pacientes.fallecido','pacientes.familia_id','pacientes.sexo','pacientes.id','pacientes.nombres', 'pacientes.apellidoP','pacientes.apellidoM', 'pacientes.rut', 'pacientes.ficha', 'pacientes.sector', 'pacientes.fecha_nacimiento', 'pacientes.fecha_fallecido')->latest('pacientes.familia_id', 'desc')
            ->get();

        return view('pacientes.index', compact('pacientes'));
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(PacienteRequest $request)
    {
        Paciente::create($request->all());
        //Alert::success('Nuevo Paciente ha sido cread@ con exito');
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
            //'fecha_fallecido' => 'date|required_if:fallecido,1|before_or_equal:'.Carbon::now()
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
}
