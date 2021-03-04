<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatologiaRequest;
use App\Patologia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PatologiaController extends Controller
{
    public function index()
    {
        $patologias = Patologia::all();

        return view('patologias.index', compact('patologias'));
    }

    public function create()
    {
        $patologia = new Patologia;
        return view('patologias.create', compact('patologia'));

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), ['nombre_patologia' => 'required|unique:patologias|min:4|string']);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $patologia = Patologia::create($request->all());
        return redirect('patologias')->withToastSuccess('Patologia Creada con Exito!');
    }

    public function show($id)
    {
        $patologia = Patologia::findOrFail($id);

        return response(['data', $patologia], 200);
    }

    public function edit($id)
    {
        $patologia = Patologia::findOrFail($id);

        return view('patologias.edit', compact('patologia'));
    }

    public function update(Request $request, $id)
    {
        $patologia = Patologia::findOrFail($id);
        $validator = Validator::make($request->all(),
            ['nombre_patologia' => 'required|string']);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $patologia->update($request->all());
        return redirect('patologias')->withSuccess('Patologia Actualizada con Exito!');
    }

    public function destroy($id)
    {
        Patologia::destroy($id);

        return response(['data' => null], 204);
    }
}
