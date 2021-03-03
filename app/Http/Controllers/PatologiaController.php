<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatologiaRequest;
use App\Patologia;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PatologiaController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');

        $patologias = Patologia::latest()
            ->search($q)
            ->paginate(10);

        return view('patologias.index', compact('patologias', 'q'));
    }

    public function create()
    {
        $patologia = new Patologia;
        return view('patologias.create', compact('patologia'));

    }

    public function store(PatologiaRequest $request)
    {
        $patologia = Patologia::create($request->all());
        Alert::success('Nueva Patologia ha sido creada con exito');

        return redirect()->route('patologias.index');
    }

    public function show($id)
    {
        $patologia = Patologia::findOrFail($id);

        return response(['data', $patologia ], 200);
    }

    public function edit($id)
    {
        $patologia = Patologia::findOrFail($id);
        return view('patologias.edit', compact('patologia'));
    }

    public function update(PatologiaRequest $request, $id)
    {
        $patologia = Patologia::findOrFail($id);
        $patologia->update($request->all());

        Alert::success('Patologia ha sido actualizada');


        return redirect()->route('patologias.index');
    }

    public function destroy($id)
    {
        Patologia::destroy($id);

        return response(['data' => null ], 204);
    }
}
