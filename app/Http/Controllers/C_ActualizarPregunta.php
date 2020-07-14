<?php

namespace App\Http\Controllers;

use App\Model\Preguntas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_ActualizarPregunta extends Controller
{
    public function Index(){

        //Defino $preguntas para consultar en la BD de la tabla 'preguntas'
        
        $preguntas = Preguntas::orderBy('id_pregunta')
        ->where('id_encuesta','=',1)
        ->paginate(8);

        /* $preguntas = Preguntas::all();

        $preguntas = DB::table('pregunta')
        ->select('pregunta.id_pregunta','descrip_preg')
        ->where('id_encuesta','=',1)
        ->paginate(10); */
        
        //dd($preguntas);
        return view('ActualizarPregunta',compact('preguntas'));
    }
}
