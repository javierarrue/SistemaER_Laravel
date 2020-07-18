<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Modulo_Docentes;

use App\Http\Controllers\Controller;

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
        return view('Modulo_Docentes\EncuestaDocentes')
        ->with(compact('sedes','grupos','carreras','asignaturas'));

        // return view('EncuestaDocentes')
        // ->with(compact('data'));
    }

}
