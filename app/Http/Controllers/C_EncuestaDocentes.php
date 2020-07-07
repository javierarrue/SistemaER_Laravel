<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_EncuestaDocentes extends Controller
{
    public function Index(){
        return view('EncuestaDocentes');
    }
}
