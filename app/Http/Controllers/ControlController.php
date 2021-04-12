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
        $controles = Control::all();

        return view('controles.index', compact('controles'));
    }


    public function controlsPcte($id)
    {
        $paciente = Paciente::findOrFail($id);
        //dd($controles);
        //$controles = Control::where('paciente_id', $paciente->id)->get();

        return view('controles.pcte', compact('paciente'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //$patologias = Patologia::latest();

        $paciente = Paciente::with('patologias')->findOrFail($id);

        return view('controles.create', compact('paciente'));
    }


    public function store(ControlRequest $request)
    {
        $control = new Control($request->except('_token'));
       //dd($request->all());
        $control->user_id = Auth::user()->id;
        $control->paciente_id = $request->paciente_id;
        $control->save();
        /*if ($request->hba1cMenor7Porcent == 1 & $request->ldlMenor100 == 1 & $request->pa_menor_140_90 == 1){
            $control->hba1c7Pa140_90Ldl100Menores = 1;
        }
        $control->save();*/
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
