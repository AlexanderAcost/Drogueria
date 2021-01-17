<?php

namespace App\Http\Controllers\PRODUCTO;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Para hacer las consultas
use Illuminate\Support\Facades\DB;

//Para hacer  posible  registro
use App\Models\Mproducto;
use App\Models\Mcategoria;

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
        $productos = DB::table('producto as pro')
                    ->join('categoria as cat', 'pro.Idcat', '=', 'cat.Idcategoria')
                    ->select('pro.Idproducto','pro.Nombrepro', 'pro.Marcapro','pro.Presentacionpro','pro.Cantidadpro','pro.Preciopro', 'cat.Nombrecat')
                    ->get();
        return view('producto.vlistaproducto', ['productos' => $productos]);
        
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
