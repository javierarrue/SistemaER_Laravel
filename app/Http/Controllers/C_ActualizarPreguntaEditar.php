<?php

namespace App\Http\Controllers;

use App\Model\Preguntas;
use App\Model\OpcionesEncuestaDocente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\ActualizarPreguntaRequest;
use App\Http\Requests\PreguntaRequest;

class C_ActualizarPreguntaEditar extends Controller
{
    public function Show(PreguntaRequest $request){

        //dd($request);

        $id_preg = $request->id_preg;

        $preguntas = Preguntas::all();

        $preguntas = DB::table('pregunta')
        ->select('pregunta.id_pregunta','descrip_preg','cod_preg','descrip_opcion','id_opcion')
        ->Leftjoin('opciones','pregunta.id_pregunta','opciones.id_pregunta')
        ->where('id_encuesta','=',1)
        ->get();

        return view('ActualizarPreguntaEditar',compact('preguntas'),compact('id_preg'));
    }

    public function update(ActualizarPreguntaRequest $request){
        //dd($request);

        //Ingreso en la tabla 'preguntas' la pregunta a editar
        if($request->aux == null){
            DB::table('pregunta')
            ->where('id_pregunta',$request->id_preg)
            ->update(['descrip_preg'=>$request->descrip_preg]);
        }

        //Ingreso en la tabla 'opciones' la opción a editar
        DB::table('opciones')
        ->where('id_opcion',$request->valor)
        ->update(['descrip_opcion'=>$request->editar]);

        //Ingreso en la tabla 'opciones' la opción a eliminar
        DB::table('opciones')
        ->where('id_opcion',$request->eliminar)
        ->delete();

        /* Acá se valida 3 valores para permitir el ingresar a la tabla
        opciones cuando el usuario haya eliminado todas las respuestas
        de las preguntas cerradas */
        if($request->valor == null and $request->aux != null and $request->editar != null){
            //Se crea un objeto del modelo OpcionesEncuestaDocente
            $opcion = new OpcionesEncuestaDocente;
            $opcion->descrip_opcion = $request->editar;
            $opcion->id_pregunta = $request->x;
            //salvo los datos
            $opcion->save();
        }

        $id_preg = $request->id_preg;
        $preguntas = Preguntas::all();

        $preguntas = DB::table('pregunta')
        ->select('pregunta.id_pregunta','descrip_preg','cod_preg','descrip_opcion','id_opcion')
        ->Leftjoin('opciones','pregunta.id_pregunta','opciones.id_pregunta')
        ->where('id_encuesta','=',1)
        ->get();

        return view('ActualizarPreguntaEditar',compact('preguntas'),compact('id_preg'))->with('status','La pregunta ha sido actualizada correctamente');
    }
}
