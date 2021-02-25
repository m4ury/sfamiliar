<?php

namespace App\Http\Controllers;

use App\Http\Requests\FichaRequest;
use App\Ficha;

class FichaController extends Controller
{
    public function index()
    {
        $fichas = Ficha::latest()->get();

        return response(['data' => $fichas ], 200);
    }

    public function store(FichaRequest $request)
    {
        $ficha = Ficha::create($request->all());

        return response(['data' => $ficha ], 201);

    }

    public function show($id)
    {
        $ficha = Ficha::findOrFail($id);

        return response(['data', $ficha ], 200);
    }

    public function update(FichaRequest $request, $id)
    {
        $ficha = Ficha::findOrFail($id);
        $ficha->update($request->all());

        return response(['data' => $ficha ], 200);
    }

    public function destroy($id)
    {
        Ficha::destroy($id);

        return response(['data' => null ], 204);
    }
}
