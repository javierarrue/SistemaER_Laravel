<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngresarProfesorNuevo extends FormRequest
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
            'cedula'=>'required|unique:profesor,cedula',
            'nombre'=>'required',
            'apellido'=>'required',
            'correo'=>'required|unique:profesor,correo',
            'telefono'=>'required',
            'id_usuario'=>'unique',
            'id_sede'=>'required'
        ];
    }
}
