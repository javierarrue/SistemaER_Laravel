<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Modulo_Docentes;

use App\Model\Preguntas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class C_ActualizarPregunta extends Controller
{
    public function Index(){

        //Defino $preguntas para consultar en la BD de la tabla 'preguntas'

        $preguntas = Preguntas::orderBy('id_pregunta')
        ->where('id_encuesta','=',1)
        ->paginate(8);

        return view('Modulo_Docentes\ActualizarPregunta',compact('preguntas'));
    }
}
