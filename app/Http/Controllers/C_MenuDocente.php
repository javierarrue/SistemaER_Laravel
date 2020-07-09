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
                $respuestas->save();

            }else{
                for($j = 0; $j<$data["cant_opciones"];$j++){
                    $respuestas = new Respuestas();

                    $respuestas->id_usuario = $data["id_usuario"];
                    $respuestas->id_encuesta = $data["id_encuesta"];
                    $respuestas->id_seccion = $data["id_seccion"];
                    $respuestas->id_pregunta = $data["id_pregunta"];
                    $respuestas->descrip_respuesta = NULL;
                    $respuestas->id_asignatura = $data["id_asignatura"];
                    $respuestas->id_grupo = $data["id_grupo"];
                    $respuestas->semestre = $data["semestre"];

                    if(array_key_exists("id_opcion".$j, $data)){
                        $respuestas->id_opcion = $data["id_opcion".$j];
                       $respuestas->save();
                    }
                }

            }

        }

        return redirect('MenuDocentes')->with('status','¡ Encuesta Enviada !');;
    }
}
