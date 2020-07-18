<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Modulo_Docentes;
use App\Http\Controllers\Controller;

use App\Http\Requests\EliminarPreguntaRequest;
use App\Model\OpcionesEncuestaDocente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Preguntas;
use App\Model\Respuestas;

class C_EliminarPregunta extends Controller
{
    public function Index(){


        $preguntas = Preguntas::all();

        //$preguntas = Preguntas::select('id_pregunta','descrip_preg','cod_preg')->where('id_encuesta','=',1)->get();

        $preguntas = DB::table('pregunta')
        ->select('pregunta.id_pregunta','descrip_preg','tipo_preg','descrip_opcion')
        ->Leftjoin('opciones','pregunta.id_pregunta','opciones.id_pregunta')
        ->where('id_encuesta','=',1)
        ->get();

        //dd($preguntas);
       //return $preguntas;
      return view('Modulo_Docentes\EliminarPregunta',compact('preguntas'));
    }

    public function Delete(EliminarPreguntaRequest $request){
        $id_pregunta = $request->id_pregunta;

        Respuestas::where("id_pregunta",$id_pregunta)
        ->delete();
        OpcionesEncuestaDocente::where("id_pregunta",$id_pregunta)
        ->delete();
        Preguntas::where("id_pregunta",$id_pregunta)
        ->delete();

        //Devolviendo con un pequeño mensaje
        return redirect('EliminarPregunta')->with('status','Pregunta eliminada');

    }
}
