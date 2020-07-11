<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ingresar_profesores extends Model
{
    protected $table= 'profesor';
    public $timestamps = false;

    protected $fillable=[
        'cedula', 'nombre', 'apellido', 'correo', 'telefono','id_usuario', 'id_sede'
    ];
}
