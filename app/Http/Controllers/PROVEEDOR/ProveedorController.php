<?php

namespace App\Http\Controllers\PROVEEDOR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Para hacer las consultas
use Illuminate\Support\Facades\DB;

//Para hacer  posible  registro
use App\Models\Mproveedor;

class ProveedorController extends Controller
{
    //
    public function formproveedor(){
        return view('proveedor.vformregistro');
    }
    public function registro(Request $request){
        $proveedores = new Mproveedor();
        $proveedores->Nombreprove = $request->input('nomprove');
        $proveedores->Direccionprove = $request->input('direccionprove');
        $proveedores->Correoprove = $request->input('correoprove');
        $proveedores->Telefonoprove = $request->input('telefonoprove');
        $proveedores->save();
        return redirect('proveedor/lista');
    }
    public function listaproveedor(){
        $proveedores=DB::table('proveedor')
                        ->orderBy('Idproveedor', 'asc')
                        ->get(); 
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
