<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddPreguntaRequest;
use App\Model\Preguntas;
use App\Model\OpcionesEncuestaDocente;

class C_AdicionarPregunta extends Controller
{
    public function Index(){
        return view('AdicionPregunta');
    }

    public function Store(AddPreguntaRequest $request){
        //objeto del Modelo Pregunta
        $pregunta = new Preguntas;

        //Asigno a cada fila del array creado en el modelo
        //Usando el $request consigo lo que se inserto en el formulario
        $pregunta->descrip_preg = $request->descrip_preg;
        $pregunta->cod_preg = $request->cod_preg;
        $pregunta->id_encuesta = $request->id_encuesta;
        $pregunta->id_seccion = $request->id_seccion;

        //Guardo en la BD y se lo asigno a la variable $pregunta
        $pregunta->save();

        //Consigo el ID de la pregunta insertada en la BD
        $id_pregunta = $pregunta->id_pregunta;

        //Arreglo con todas las opciones agregadas para la respuesta CERRADA
        $opcionesArray = $request->except('_token','descrip_preg','cod_preg','id_encuesta','id_seccion');

        //Decalaro un arreglo
        $data = array();

        //Luego le asignas las opciones almacenadas, mediante un recorrido foreach.
        foreach($opcionesArray as $opcion){
            $data []= [
                'descrip_opcion' => $opcion,
                'id_pregunta' => $id_pregunta
            ];
        }
        //Guardando en la Base de datos.
        OpcionesEncuestaDocente::insert($data);

        //Devolviendo un pequeño mensaje
        return redirect('AdicionarPregunta')->with('status','Pregunta añadida');

    }

}
