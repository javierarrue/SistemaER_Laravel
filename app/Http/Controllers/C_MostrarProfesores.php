<?php

namespace App\Http\Controllers;
use App\Models\ingresar_profesores;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;
use App\http\Requests\R_AgregarProfesor;

use App\Traits\Mostrartraits;
class C_MostrarProfesores extends Controller
{
    use Mostrartraits;
    public function MostrarProfesores(){
        $profesor= \DB::table('profesor')
        ->join('sede','sede.id_sede', '=', 'profesor.id_sede')
        ->select('profesor.nombre', 'profesor.apellido', 'profesor.cedula', 'profesor.correo', 'profesor.telefono', 'sede.nombre_sede as sedenombre')
        ->paginate(5);
        return view('mostrarprofesores')->with('profesor',$profesor);
    }

}
