<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarPreguntaRequest extends FormRequest
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
            //'descrip_preg'=>'required'
            //'editar'=>'required'
        ];
    }
    public function messages()
    {
        return [
            //'descrip_preg.required'=>"El campo 'descripción' no puede estar vacío"
            //'editar.required'=>"El campo 'Editar...' no puede estar vacío"
        ];
    }
}