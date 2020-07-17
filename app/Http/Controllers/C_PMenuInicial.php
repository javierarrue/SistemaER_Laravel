<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_PMenuInicial extends Controller
{
    public function index(){
        return view("P_MenuInicial");
    }
}
