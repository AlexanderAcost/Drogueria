<?php

namespace App\Http\Controllers\ADMINISTRACION;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function raiz(){
        return view('home');
    }
}
