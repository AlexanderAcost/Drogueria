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
        $producto->idcat = $request->input('categoria');
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
        $nombre = $request->input('nompro');
       $producto = Mproducto::where('nompro', 'like',$nombre)->first();
       if($producto)
            return view('producto.vresbuscar', compact('producto'));
        else
            return view('producto.vvacio');
        
    }
    public function formactualizar(){
        return view('producto.vformactualizar');
    }
    public function actualizar(){
        return view('v');
    }

}
