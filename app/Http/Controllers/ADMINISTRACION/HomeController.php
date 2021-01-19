<?php

namespace App\Http\Controllers\ADMINISTRACION;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Para hacer las consultas
use Illuminate\Support\Facades\DB;

//Para hacer  posible  registro
use App\Models\Mtipo;

class HomeController extends Controller
{
    //
    public function raiz(){
        return view('home');
    }
    public function inicio()
    {
        $tipos = DB::table('tipo')->first();
        return view('auth.login', ['tipos' => $tipos]);
        
    }
}
