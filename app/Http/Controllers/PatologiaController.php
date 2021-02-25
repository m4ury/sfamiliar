<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatologiaRequest;
use App\Patologia;

class PatologiaController extends Controller
{
    public function index()
    {
        $patologias = Patologia::latest()->get();

        return response(['data' => $patologias ], 200);
    }

    public function store(PatologiaRequest $request)
    {
        $patologia = Patologia::create($request->all());

        return response(['data' => $patologia ], 201);

    }

    public function show($id)
    {
        $patologia = Patologia::findOrFail($id);

        return response(['data', $patologia ], 200);
    }

    public function update(PatologiaRequest $request, $id)
    {
        $patologia = Patologia::findOrFail($id);
        $patologia->update($request->all());

        return response(['data' => $patologia ], 200);
    }

    public function destroy($id)
    {
        Patologia::destroy($id);

        return response(['data' => null ], 204);
    }
}
