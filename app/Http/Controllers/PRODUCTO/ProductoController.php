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
        $categorias = DB::table('categoria')->get();
        return view('producto.vformregistro', ['categorias' => $categorias]);
    }
    public function registro(Request $request){
        $producto = new Mproducto();
        $producto->Idcat = $request->input('categoria');
        $producto->Nombrepro = $request->input('nompro');
        $producto->Descripcionpro = $request->input('descripcionpro');
        $producto->Marcapro = $request->input('marcapro');
        $producto->Presentacionpro = $request->input('prespro');
        $producto->Cantidadpro = $request->input('cantidad');
        $producto->Preciopro = $request->input('precio');
        $producto->fotopro = $request->input('foto');
        $producto->save();
        return redirect('producto/lista');
    }
    public function listaproducto(){
        $productos = DB::table('producto as pro')
                    ->join('categoria as cat', 'pro.Idcat', '=', 'cat.Idcategoria')
                    ->select('pro.Idproducto','pro.Nombrepro', 'pro.Marcapro','pro.Presentacionpro','pro.Cantidadpro','pro.Preciopro', 'cat.Nombrecat')
                    ->orderBy('Idproducto', 'asc')
                    ->get();
        return view('producto.vlistaproducto', ['productos' => $productos]);
        
    }
    public function formbuscar(){
        return view('producto.vformbuscar');
        
    }
    public function buscar(Request $request){
        $nombre = $request->input('consultaPro');
        $producto = Mproducto::join('categoria', 'Idcat', '=', 'Idcategoria')
        ->where('Nombrepro', 'like',$nombre)->first();
        if($producto)
            
            return view('producto.vresbuscar', ['producto' => $producto]);
        else
            return view('producto.vvacio');
        
    }
    public function formactualizar($Idproducto){
        $producto = Mproducto::findOrFail($Idproducto);
        $categorias = Mcategoria::all();
        return view('producto.vformactualizar', compact('producto','categorias'));
        
    }
    public function actualizar(Request $request, $Idproducto){
        $producto = Mproducto::findOrFail($Idproducto);
        $producto->Idcat = $request->input('categoria');
        $producto->Nombrepro = $request->input('nompro');
        $producto->Descripcionpro = $request->input('descripcionpro');
        $producto->Marcapro = $request->input('marcapro');
        $producto->Presentacionpro = $request->input('prespro');
        $producto->Cantidadpro = $request->input('cantidad');
        $producto->Preciopro = $request->input('precio');
        $producto->fotopro = $request->input('foto');
        $producto->save();
        return redirect('producto/lista');
        
    }
    public function eliminar($Idproducto){
        $producto = Mproducto::findOrFail($Idproducto);
        $producto->delete();
        return redirect('producto/lista');
        
    }
    public function formcategoria(){
        return view('producto.vformcategoria');
    }
    public function regcategoria(Request $request){
        $producto = new Mcategoria();
        $producto->Idcategoria = $request->input('idcategoria');
        $producto->Nombrecat = $request->input('nombre');
        
        $producto->save();
        return redirect('producto/lista');
    }
}
