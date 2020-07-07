<?php

namespace App\Http\Controllers;

use App\Model\Asignaturas;
use App\Model\Carreras;
use App\Model\Grupos;
use App\Model\Sedes;
use Illuminate\Http\Request;
use App\Http\Requests\EncuestaDocenteRequest;
use App\Model\Usuarios;
use App\Model\Respuestas;
use Illuminate\Support\Facades\DB;

class C_EncuestaDocentes extends Controller
{
    public function index(){

        $sedes = Sedes::all();
        $grupos = Grupos::all();
        $carreras = Carreras::all();
        $asignaturas = Asignaturas::all();
/*
        $data = array(
            'sede' => Sedes::all(),
            'grupo' => Grupos::all(),
            'carrera' => Carreras::all(),
            'asignatura' => Asignaturas::all()
        );
*/
        return view('EncuestaDocentes')
        ->with(compact('sedes','grupos','carreras','asignaturas'));

        // return view('EncuestaDocentes')
        // ->with(compact('data'));
    }


    public function store(EncuestaDocenteRequest $request){
        $respuestas = Respuestas::all();
        $idUsuario = Usuarios::all();

        $idUsuario = DB::table('usuario')
        ->select('id_usuario')
        ->where('cedula','=',$request->cedula)
        ->get();

        if($idUsuario->first()!==null){

            $id_usuario = "";
            foreach ($idUsuario as $id){
                $id_usuario = $id->id_usuario;
            }

            $respuestas = DB::table('respuesta')
            ->select('id_usuario','id_asignatura','id_grupo')
            ->where('id_usuario','=',$id_usuario)
            ->where('id_asignatura','=',$request->asignaturas)
            ->where('id_grupo','=',$request->grupos)
            ->first();



            if($respuestas==null){
                return view("MenuDocentes");
            }
            return redirect()->back()->withErrors("Ya hiciste la encuesta bro :(");


        }
        return redirect()->back()->withErrors("No se encontro la cedula");

    }
}
