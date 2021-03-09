<?php

namespace App\Http\Controllers;

use App\Control;
use App\Paciente;
use App\Patologia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControlController extends Controller
{
    public function index()
    {
        $controles = Control::latest()->get();

        return view('controles.index',compact('controles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $patologias = Patologia::latest();
        $paciente = Paciente::findOrFail($id);
        return view('controles.create', compact('paciente', 'patologias'));
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
        $control->save();

        dd($request->all());

        return view('controles' . $request->paciente_id, compact('control'));

    }

    public function show($id)
    {
        $control = Control::findOrFail($id);

        return response(['data', $control ], 200);
    }

    public function update(Request $request, $id)
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
