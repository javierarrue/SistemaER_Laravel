<?php

namespace App\Http\Controllers;

use App\Model\Preguntas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_ConsultarPreguntas extends Controller
{
    public function Index(){

        $preguntas = Preguntas::all();

        //$preguntas = Preguntas::select('id_pregunta','descrip_preg','cod_preg')->where('id_encuesta','=',1)->get();

        $preguntas = DB::table('pregunta')
        ->select('pregunta.id_pregunta','descrip_preg','cod_preg','descrip_opcion')
        ->Leftjoin('opciones','pregunta.id_pregunta','opciones.id_pregunta')
        ->where('id_encuesta','=',1)
        ->get();

        //dd($preguntas);
       //return $preguntas;
      return view('ConsultarPreguntas',compact('preguntas'));
    }

}
