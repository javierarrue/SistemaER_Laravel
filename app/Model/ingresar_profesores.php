<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ingresar_profesores extends Model
{
    protected $table= 'profesor';

    protected $fillable=[
        'cedula', 'nombre', 'apellido', 'correo', 'telefono','id_usuario', 'id_sede' 
    ];
}
