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
    public function buscar(Request $request){
        $nombre = $request->input('consultaPro');
        $proveedor = Mproveedor::where('Nombreprove', 'like',$nombre)->first();
        if($proveedor)
            
            return view('proveedor.vresbuscar', ['proveedor' => $proveedor]);
        else
            return view('proveedor.vvacio');
        
    }
    public function formactualizar($Idproveedor){
        $proveedor = Mproveedor::findOrFail($Idproveedor);
        
        return view('proveedor.vformactualizar', compact('proveedor'));
    }
    public function actualizar(Request $request, $Idproveedor){
        $proveedores = Mproveedor::findOrFail($Idproveedor);
        $proveedores->Nombreprove = $request->input('nomprove');
        $proveedores->Direccionprove = $request->input('direccionprove');
        $proveedores->Correoprove = $request->input('correoprove');
        $proveedores->Telefonoprove = $request->input('telefonoprove');
        $proveedores->save();
        return redirect('proveedor/lista');
        
    }
    public function eliminar($Idproveedor){
        $proveedor = Mproveedor::findOrFail($Idproveedor);
        $proveedor->delete();
        return redirect('proveedor/lista');
        
    }
}
