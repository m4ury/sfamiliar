<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            'familia' => 'required|min:4|string',
            'domicilio' => 'required|string|min:3',
            //'ficha_familiar' => 'required|number'
            'sector' => 'required'
        ];
    }
}
