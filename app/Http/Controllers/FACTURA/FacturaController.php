<?php

namespace App\Http\Controllers\FACTURA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Para hacer las consultas
use Illuminate\Support\Facades\DB;

use App\Model\MHabitaciones;

class FacturaController extends Controller
{
    //
    public function formfactura(){
        return view('factura.vformregistro');
    }
    public function registro(Request $request){
        return view('v');
    }
    public function listafactura(){    
        $facturas = DB::table('factura as fac')
                    ->join('proveedor as prove', 'fac.Idprove', '=', 'prove.Idproveedor')
                    //->join('item as item', 'item.Idfac', '=', 'fac.Idfactura')
                    ->select('fac.Idfactura','prove.Nombreprove','fac.Fechafac','fac.Totalfac')
                    //->select('fac.Idfactura','prove.Nombreprove','fac.Fechafac','fac.Totalfac','item.Numeroitem','item.Cantidaditem','item.Precioitem','item.Totalitem')
                    ->get();
        $items=DB::table('item as item')
                     ->join('factura as fac', 'item.Idfac', '=', 'fac.Idfactura')
                     ->join('producto as pro', 'item.Idpro', '=', 'pro.Idproducto')
                     ->join('proveedor as prove', 'fac.Idprove', '=', 'prove.Idproveedor')
                     ->get();
        
        return view('factura.vlistafactura', ['facturas' => $facturas], ['items' => $items]);
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
