<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'ingreso_plan' => 'nullable|boolean',
            'observacion_plan' => 'nullable|string|max:255',
            'fecha_ingreso' => 'required|date',
            'tipo_plan' => 'required',
            'motivo_egreso' => 'nullable|required_if:egreso_plan, 1',
            'fecha_egreso' => 'nullable|date|required_if:egreso_plan,1',
            'motivo_egreso' => 'nullable|string|required_if:egreso_plan,1',
        ];
    }
}
