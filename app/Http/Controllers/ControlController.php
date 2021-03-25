<?php

namespace App\Http\Controllers;

use App\Control;
use App\Paciente;
use App\Patologia;
use Illuminate\Http\Request;
use App\Http\Requests\ControlRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ControlController extends Controller
{
    public function index()
    {
        $controles = Control::with('paciente')->latest()->get();

        return view('controles.index', compact('controles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //$patologias = Patologia::latest();
        $paciente = Paciente::findOrFail($id);
        return view('controles.create', compact('paciente', 'patologias'));
    }


    public function store(ControlRequest $request)
    {
        $control = new Control($request->except('_token'));
        $control->user_id = Auth::user()->id;
        $control->paciente_id = $request->paciente_id;
        $control->save();

        //dd($control);

        return redirect('pacientes/' . $request->paciente_id)->withSuccess('Control creado con exito!');
    }

    public function show($id)
    {
        $control = Control::findOrFail($id);

        return response(['data', $control], 200);
    }

    public function update(Request $request, $id)
    {
        $control = Control::findOrFail($id);
        $control->update($request->all());

        return response(['data' => $control], 200);
    }

    public function destroy($id)
    {
        Control::destroy($id);

        return response(['data' => null], 204);
    }
}
