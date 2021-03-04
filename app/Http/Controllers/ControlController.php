<?php

namespace App\Http\Controllers;

use App\Http\Requests\ControlRequest;
use App\Control;
use App\Paciente;

class ControlController extends Controller
{
    public function index()
    {
        $controls = Control::latest()->get();

        return view('controles.index',compact('controls'));
    }

    public function create($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('controles.create', compact('paciente'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tipo_control' => 'required',
            'peso_actual' => 'required',
            'talla_actual' => 'required'
        ]);
        $control = new Control($request->except('_token'));
        $control->user_id = Auth::user()->id;
        $control->paciente_id = $request->paciente_id;
        $mensaje->save();

        return view('controles' . $request->paciente_id, compact('control'));

    }

    public function show($id)
    {
        $control = Control::findOrFail($id);

        return response(['data', $control ], 200);
    }

    public function update(ControlRequest $request, $id)
    {
        $control = Control::findOrFail($id);
        $control->update($request->all());

        return response(['data' => $control ], 200);
    }

    public function destroy($id)
    {
        Control::destroy($id);

        return response(['data' => null ], 204);
    }
}
