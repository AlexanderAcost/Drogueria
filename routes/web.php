<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ADMINISTRACION\HomeController;

use App\Http\Controllers\PRODUCTO\ProductoController;
use App\Http\Controllers\PROVEEDOR\ProveedorController;
use App\Http\Controllers\FACTURA\FacturaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[HomeController::class, 'inicio'])->middleware('auth');
 

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dashboard',[HomeController::class, 'raiz'])->middleware('auth')->name('dashboard');;
require __DIR__.'/auth.php';

////////////////////////////// Rutas 

//Admin

//Productos
Route::get('producto/formregistro',[ProductoController::class, 'formproducto'])->middleware('auth');//Lista
Route::POST('producto/registro',[ProductoController::class, 'registro'])->middleware('auth');//Lista


Route::get('producto/lista',[ProductoController::class, 'listaproducto'])->middleware('auth');  //Lista
//Route::get('producto/visualizar',[ProductoController::class, 'showClientes']);

Route::get('producto/buscar',[ProductoController::class, 'formbuscar'])->middleware('auth');
Route::POST('producto/buscar',[ProductoController::class, 'buscar'])->middleware('auth');

Route::get('producto/actualizar/{Idproducto}', [ProductoController::class, 'formactualizar'])->name('actualizarPro')->middleware('auth');
Route::post('producto/actualizar/{Idproducto}', [ProductoController::class, 'actualizar'])->name('actualizarProducto')->middleware('auth');

Route::get('producto/eliminar/{Idproducto}', [ProductoController::class, 'eliminar'])->name('eliminarProducto');
//Proveedores
Route::get('proveedor/formregistro',[ProveedorController::class, 'formproveedor'])->middleware('auth');//Lista
Route::POST('proveedor/registro',[ProveedorController::class, 'registro'])->middleware('auth');//Lista

Route::get('proveedor/lista',[ProveedorController::class, 'listaproveedor'])->middleware('auth');//lista
//Route::get('proveedor/visualizar',[ProveedorController::class, 'showClientes']);

Route::get('proveedor/buscar',[ProveedorController::class, 'formbuscar'])->middleware('auth');
Route::POST('proveedor/buscar',[ProveedorController::class, 'buscar'])->middleware('auth');

Route::get('proveedor/actualizar/{Idproveedor}', [ProveedorController::class, 'formactualizar'])->name('actualizarProve')->middleware('auth');
Route::post('proveedor/actualizar/{Idproveedor}', [ProveedorController::class, 'actualizar'])->name('actualizarProveedor')->middleware('auth');

Route::get('proveedor/eliminar/{Idproveedor}', [ProveedorController::class, 'eliminar'])->name('eliminarProductoProve');

//FActura

Route::get('factura/formregistro',[FacturaController::class, 'formfactura'])->middleware('auth');
Route::POST('factura/registro',[FacturaController::class, 'registro'])->middleware('auth');

Route::get('factura/lista',[FacturaController::class, 'listafactura'])->middleware('auth');//lista
//Route::get('Factura/visualizar',[FacturaController::class, 'showClientes']);

Route::get('factura/buscar',[FacturaController::class, 'formbuscar'])->middleware('auth');
Route::POST('factura/buscar',[FacturaController::class, 'buscar'])->middleware('auth');

Route::get('factura/actualizar/{id}', [FacturaController::class, 'formactualizar'])->middleware('auth');
Route::post('factura/actualizar/{id}', [FacturaController::class, 'actualizar'])->middleware('auth');

//Items
Route::get('item/lista/{idfac}',[ItemController::class, 'listaitem'])->middleware('auth');

//Categoria
Route::get('producto/formcategoria',[ProductoController::class, 'formcategoria'])->middleware('auth');//Lista
Route::POST('producto/formcategoria',[ProductoController::class, 'regcategoria'])->middleware('auth');//Lista