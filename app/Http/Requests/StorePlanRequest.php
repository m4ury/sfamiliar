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
        //dd($this->all());
        return [
            'ingreso_plan' => 'nullable|boolean',
            'observacion_plan' => 'nullable|string|max:255',
            'fecha_ingreso' => 'required|date',
            'tipo_plan' => 'required|required_without:egreso_plan',
            'egreso_plan' => 'nullable|boolean',
            'motivo_egreso' => 'nullable|required_with:egreso_plan',
            'fecha_egreso' => 'nullable|date|required_when:egreso_plan,1',
            'motivo_egreso' => 'nullable|string|required_when:egreso_plan,1',
            'familia_id' => 'required|exists:familias,id'
        ];
    }
}
