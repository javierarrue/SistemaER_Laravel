<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EncuestaDocenteFormularioRequest;
use App\Model\Respuestas;

class C_MenuDocente extends Controller
{
    public function Index(){
        return view('MenuDocentes');
    }

    public function Store(EncuestaDocenteFormularioRequest $request){
        $chuso = 0;
        $cant_respuestas = 0;
//$request->cantidad+1
        for($i = 1 ; $i<$request->cantidad+1;$i++){
            $respuestas = new Respuestas();
            $data = $request->$i;

            if($data["tipo_resp"]=="abierta"){

                $respuestas->id_usuario = $data["id_usuario"];
                $respuestas->id_encuesta = $data["id_encuesta"];
                $respuestas->id_seccion = $data["id_seccion"];
                $respuestas->id_pregunta = $data["id_pregunta"];
                $respuestas->id_opcion = $data["id_opcion0"];
                $respuestas->descrip_respuesta = $data["descrip_resp"];
                $respuestas->id_asignatura = $data["id_asignatura"];
                $respuestas->id_grupo = $data["id_grupo"];
                $respuestas->semestre = $data["semestre"];
                //$respuestas->save();

            }else{
                $cant_respuestas = count($data)-8;

                for($j = 0; $j<$cant_respuestas-1;$j++){


                    $respuestas->id_usuario = $data["id_usuario"];
                    $respuestas->id_encuesta = $data["id_encuesta"];
                    $respuestas->id_seccion = $data["id_seccion"];
                    $respuestas->id_pregunta = $data["id_pregunta"];
                  //  $respuestas->id_opcion = $data["id_opcion".$j];
                  //---> PROBLEMA CON ESTO, SI LO HACES ASI VA A EMPEZAR A BUSCAR DESDE 0,
                  //PERO ENREALIDAD EL ID DE LA OPCION PUEDE EMPEZAR DESDE CUALQUIER NUMERO, ENTONCES TE VA A DAR
                  //ERROR POR QUE NO VA A ENCONTRAR EL ID QUE SE BUSCA.
                  //POR EJEMPLO:
                  /*
                    busca: id_opcion0
                    no encuentra porque en realidad empieza desde id_opcion6
                  */
                    $respuestas->descrip_respuesta = NULL;
                    $respuestas->id_asignatura = $data["id_asignatura"];
                    $respuestas->id_grupo = $data["id_grupo"];
                    $respuestas->semestre = $data["semestre"];
                   // $respuestas->save();

                    $chuso++;
                }

            }

            // $respuestas->id_usuario = $data["id_usuario"];
            // $respuestas->id_encuesta = $data["id_encuesta"];
            // $respuestas->id_seccion = $data["id_seccion"];
            // $respuestas->id_pregunta = $data["id_pregunta"];
            // $respuestas->id_opcion = $data["id_opcion0"];
            // if($data["tipo_resp"]=="abierta"){
            //     $respuestas->descrip_respuesta = $data["descrip_resp"];
            // }else{
            //     $respuestas->descrip_respuesta = NULL;
            // }
            // $respuestas->id_asignatura = $data["id_asignatura"];
            // $respuestas->id_grupo = $data["id_grupo"];
            // $respuestas->semestre = $data["semestre"];

           // $respuestas->save();

        }
        $xD = 4;
        return $request;
       // dd($data);
    }
}
