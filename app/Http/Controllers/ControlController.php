<?php

namespace App\Http\Controllers;

use App\Http\Requests\ControlRequest;
use App\Control;

class ControlController extends Controller
{
    public function index()
    {
        $controls = Control::latest()->get();

        return response(['data' => $controls ], 200);
    }

    public function store(ControlRequest $request)
    {
        $control = Control::create($request->all());

        return response(['data' => $control ], 201);

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
