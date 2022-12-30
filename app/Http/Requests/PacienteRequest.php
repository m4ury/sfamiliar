<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'rut' => 'required|unique:pacientes|cl_rut',
            'nombres' => 'required|string|min:3',
            'apellidoP' => 'required|string|min:3',
            'direccion' => 'required|string|min:3',
            'ficha' => 'required|unique:pacientes'
        ];
    }
}
