<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_ProfesoresRespondido extends Controller
{
    public function Index(){

        $profesor= \DB::table('profesor')
        ->join('usuario', 'usuario.id_usuario','=', 'profesor.id_usuario')
        ->join('respuesta','respuesta.id_usuario','=','usuario.id_usuario')
        ->join('asignatura','asignatura.id_asignatura','=','respuesta.id_asignatura')
        ->select('profesor.id_profesor','profesor.cedula','respuesta.id_grupo','asignatura.nombre','respuesta.semestre','respuesta.año')
        ->distinct()
        ->paginate(8);

        return view('P_ProfesoresRespondido')->with('profesor',$profesor);
    }
}
