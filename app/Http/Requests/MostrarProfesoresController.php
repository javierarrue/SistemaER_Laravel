<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;
use App\http\Requests\IngresarProfesorNuevo;


//use App\http\Requests\IngresarIdUsuario;
use App\Models\ingresar_profesores;

use App\Traits\Mostrartrait;

class MostrarProfesoresController extends Controller{


    use Mostrartrait;

    public function mostrarprofesor(){

        $profesor= \DB::table('profesor')
        ->join('sede','sede.id_sede', '=', 'profesor.id_sede')
        ->select('profesor.nombre', 'profesor.apellido', 'profesor.cedula', 'profesor.correo', 'profesor.telefono', 'sede.nombre as sedenombre')
        ->paginate(5);
        //->get();
        //$profesor = \DB::paginate(3);
        //dd($profesor);
       // $qry='SELECT p.nombre, p.apellido ,p.cedula, p.correo, p.telefono, s.nombre as nombresede FROM profesor p INNER JOIN sede as s on p.id_sede=s.id_sede WHERE id_profesor=28';
         //$mensajes=\DB::select($qry);
        //$data = \DB::table('profesor')->select('id_profesor')->get();
       // $data = \DB::orderBy('id_profesor', 'DESC')->paginate();
      // $mensajes = \DB::all();
        return view('mostrarprofesor')->with('profesor',$profesor);
    }
}