<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ControlRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tipo_control' => 'required',
            'fecha_control' => 'required',
            'peso_actual' => 'required|numeric|min:1',
            'talla_actual' => 'required|numeric|min:1',
            'proximo_control' => 'required|after:fecha_control',
            'prox_tipo' => 'required'
        ];
    }
}
