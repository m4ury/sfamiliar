<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request; // Import Request facade

class FamiliaRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        // Obtiene el ID de la familia si es edición, sino null (para crear)
        $id = $this->route('familia') ? $this->route('familia')->id : 'NULL';
        $sector = $this->get('sector');

        return [
            'familia' => 'required|min:4|string',
            'domicilio' => 'required|string|min:3',
            'ficha_familiar' => [
                'required',
                'numeric',
                'digits_between:2,10',
                'unique:familias,ficha_familiar,' . $id . ',id,sector,' . $sector,
            ],
            'tipo_familia' => 'required',
            'etapa_cicloVital' => 'required',
        ];
    }

    public function messages()
    {

        $sector = request()->get('sector');
        return [
            'ficha_familiar.unique' => 'Numero de ficha familiar ya se encuentra en uso para este sector' . $sector,
        ];
    }
}
