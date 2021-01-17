<?php

namespace App\Http\Controllers\PRODUCTO;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function formproducto(){
        return view('producto.vformregistro');
    }
    public function registro(){
        return view('v');
    }
    public function listaproducto(){
        return view('producto.vlistaproducto');
    }
    public function formbuscar(){
        return view('producto.vformbuscar');
    }
    public function buscar(){
        return view('v');
    }
    public function formactualizar(){
        return view('producto.vformactualizar');
    }
    public function actualizar(){
        return view('v');
    }

}
