<?php

namespace App\Http\Controllers\FACTURA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Para hacer las consultas
use Illuminate\Support\Facades\DB;

//Para hacer  posible  registro
use App\Models\Mproveedor;
use App\Models\Mfactura;


class FacturaController extends Controller
{
    //
    public function formfactura(){
        $proveedores = DB::table('proveedor')->get();
        return view('factura.vformregistro', ['proveedores' => $proveedores]);       
    }
    public function registro(Request $request){
        $fecha = new Mfactura();
        $fecha->Idprove  = $request->input('proveedor');
        $fecha->Fechafac = $request->input('fecha');
        $fecha->Totalfac = $request->input('total');
        $fecha->save();
        return redirect('factura/lista');
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
