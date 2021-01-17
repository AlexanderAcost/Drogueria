<?php

namespace App\Http\Controllers\FACTURA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    //
    public function formfactura(){
        return view('factura.vformregistro');
    }
    public function registro(){
        return view('v');
    }
    public function listafactura(){
        return view('factura.vlistafactura');
    }
    public function formbuscar(){
        return view('factura.vformbuscar');
    }
    public function buscar(){
        return view('v');
    }
    public function formactualizar(){
        return view('factura.vformactualizar');
    }
    public function actualizar(){
        return view('v');
    }
}
