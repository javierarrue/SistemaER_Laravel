<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_ListaProfesores extends Controller
{
    public function Index(){
        return view('ListaProfesores');
    }
}
