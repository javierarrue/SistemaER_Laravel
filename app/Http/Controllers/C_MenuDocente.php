<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_MenuDocente extends Controller
{
    public function Index(){
        return view('MenuDocentes');
    }
}
