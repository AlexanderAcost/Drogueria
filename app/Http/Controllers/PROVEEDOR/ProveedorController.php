<?php

namespace App\Http\Controllers\PROVEEDOR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Para hacer las consultas
use Illuminate\Support\Facades\DB;

class ProveedorController extends Controller
{
    //
    public function formproveedor(){
        return view('proveedor.vformregistro');
    }
    public function registro(){
        return view('v');
    }
    public function listaproveedor(){
        $proveedores=DB::table('proveedor')->get(); 
        return view('proveedor.vlistaproveedor', ['proveedores' => $proveedores]);
    }
    public function formbuscar(){
        return view('proveedor.vformbuscar');
    }
    public function buscar(){
        return view('v');
    }
    public function formactualizar(){
        return view('proveedor.vformactualizar');
    }
    public function actualizar(){
        return view('v');
    }
}
