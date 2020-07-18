<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Modulo_Docentes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_PMenuInicial extends Controller
{
    public function index(){
        return view("Modulo_Docentes\P_MenuInicial");
    }
}
