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
        $ficha_familiar = \Request::get('ficha_familiar');
        $sector = \Request::get('sector');
        //dd($sector);
        return [
            'familia' => 'required|min:4|string',
            'domicilio' => 'required|string|min:3',
            //'user_id' => 'unique:service_details,user_id,NULL,id,service_id,' . $service_id,
            //'service_id' => 'unique:service_details,service_id,NULL,id,user_id,' . $user_id,
            'ficha_familiar' => 'required|unique:familias,ficha_familiar,NULL,id,sector,' . $sector,
            //'sector' => 'required|unique:familias,sector,NULL,id,ficha_familiar,' . $ficha_familiar
        ];
    }

    public function messages()
    {

        $sector = \Request::get('sector');
        return[
            'ficha_familiar.unique' => 'Numero de ficha familiar ya se encuentra en uso para este sector'.$sector,
        ];
    }
}
