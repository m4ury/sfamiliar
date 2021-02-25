<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PcienteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
