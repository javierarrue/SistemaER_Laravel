<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Modulo_Docentes;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Preguntas;
use App\Http\Requests\EncuestaDocenteRequest;
use App\Model\Carreras;
use App\Model\Usuarios;
use App\Model\Respuestas;
use Carbon\Carbon;

class C_EncuestaDocenteFormulario extends Controller
{
    public function index(EncuestaDocenteRequest $request){
        $respuestas = Respuestas::all();
        $idUsuario = Usuarios::all();

        /*Consulto la tabla USUARIO
        y rescato el ID en base a la CEDULA insertada.
        Utilizo el REQUEST para saber la CEDULA insertada-
        */
        $idUsuario = DB::table('usuario')
        ->select('id_usuario')
        ->where('cedula','=',$request->cedula)
        ->get();

        /*Ahora verifico:
        SI la consulta es distinto de NULL
        OSEA que si RETORNA ALGO entonces:
            - Significa que la cedula existe en la BD

        SI NO retorna NADA entonces:
            - La cedula no esta en la BD.
        */
        if($idUsuario->first()!==null){
            /*Si la cedula se encuentra entonces:
            Creo una variable para manejar mejor el ID de usuario del DOCENTE
            */
            $id_usuario = "";
            foreach ($idUsuario as $id){
                //Asigno EL ID
                $id_usuario = $id->id_usuario;
            }

            /*Luego procedo a consultar la tabla RESPUESTA
                En esta consulta intento ver si el docente
                ya habia contestado a la encuesta
                en base a LA ASIGNATURA, EL GRUPO y el año.
            */

            $result = DB::select('SELECT*FROM respuesta
            WHERE EXTRACT(YEAR FROM año)=?
            AND id_usuario=?
            AND id_asignatura=?
            AND id_grupo=?',
            [date('Y'),$id_usuario,$request->asignaturas,$request->grupos]);

/*
            $respuestas = DB::table('respuesta')
            ->select('id_usuario','id_asignatura','id_grupo','año')
            ->where('id_usuario','=',$id_usuario)
            ->where('id_asignatura','=',$request->asignaturas)
            ->where('id_grupo','=',$request->grupos)
            ->first();
*/
            /*AHORA, si contesto alguna pregunta SIGNIFICA QUE:
                Ya hizo la encuesta anteriormente*/
            if(empty($result)){
                /*Si la consulta es NULL, osea si no devuelve NADA
                Significa que NO hizo la encuesta para el GRUPO Y ASIGNATURA seleccionados*/
                $preguntas = Preguntas::all();

                /*Consulto la tabla pregunta*/
                $preguntas = DB::table('pregunta')
                ->select('pregunta.id_pregunta','descrip_preg','tipo_preg','descrip_opcion','id_opcion','id_seccion')
                ->Leftjoin('opciones','pregunta.id_pregunta','opciones.id_pregunta')
                ->where('id_encuesta','=',1)
                ->get();

                $id_asignatura = $request->asignaturas;
                $id_grupo = $request->grupos;
                $semestre = $request->semestres;

                /*RETORNO LA VISTA, juntado con el Json con todas las preguntas de id_encuesta = 1
                Osea las encuesta a DOCENTES*/
                //
                return view("Modulo_Docentes\EncuestaDocenteFormulario",
                compact('preguntas'))
                ->with(compact('id_asignatura'))
                ->with(compact('id_usuario'))
                ->with(compact('id_grupo'))
                ->with(compact('semestre'));

            }
            /*Si ya hizo la encuesta, entonces mando un mensaje de error de vuelta*/
            return redirect()->back()->withErrors("Ya contesto la encuesta para ese Grupo y Asignatura");

        }
        /*Si la cedula insertada no se encuentra en la BD,
        mando un mensaje de error de vuelta*/
        return redirect()->back()->withErrors("No se encontro la cedula");

    }

}
