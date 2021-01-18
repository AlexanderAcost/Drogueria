<?php

namespace App\Http\Controllers\ITEM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Para hacer las consultas
use Illuminate\Support\Facades\DB;


class ItemController extends Controller
{
    //
    public function listaitem($idfac){
        $items=DB::table('item as item')
                     ->join('factura as fac', 'item.Idfac', '=', '$idfac')
                     ->join('producto as pro', 'item.Idpro', '=', 'pro.Idproducto')
                     ->join('proveedor as prove', 'fac.Idprove', '=', 'prove.Idproveedor')                      
                     ->get();
        return view('v');
    }
}
