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
//raiz
Route::get('/',[HomeController::class, 'raiz']);

//Admin

//Productos
Route::get('producto/formregistro',[ProductoController::class, 'formproducto']);
Route::POST('producto/registro',[ProductoController::class, 'registro']);

Route::get('producto/lista',[ProductoController::class, 'listaproducto']);  //Lista
//Route::get('producto/visualizar',[ProductoController::class, 'showClientes']);

Route::get('producto/buscar',[ProductoController::class, 'formbuscar']);
Route::POST('producto/buscar',[ProductoController::class, 'buscar']);

Route::get('producto/actualizar/{id}', [ProductoController::class, 'formactualizar']);
Route::post('producto/actualizar/{id}', [ProductoController::class, 'actualizar']);

//Proveedores
Route::get('proveedor/formregistro',[ProveedorController::class, 'formproveedor']);
Route::POST('proveedor/registro',[ProveedorController::class, 'registro']);

Route::get('proveedor/lista',[ProveedorController::class, 'listaproveedor']);
//Route::get('proveedor/visualizar',[ProveedorController::class, 'showClientes']);

Route::get('proveedor/buscar',[ProveedorController::class, 'formbuscar']);
Route::POST('proveedor/buscar',[ProveedorController::class, 'buscar']);

Route::get('proveedor/actualizar/{id}', [ProveedorController::class, 'formactualizar']);
Route::post('proveedor/actualizar/{id}', [ProveedorController::class, 'actualizar']);


//FActura

Route::get('factura/formregistro',[FacturaController::class, 'formfactura']);
Route::POST('Factura/registro',[FacturaController::class, 'registro']);

Route::get('factura/lista',[FacturaController::class, 'listafactura']);
//Route::get('Factura/visualizar',[FacturaController::class, 'showClientes']);

Route::get('factura/buscar',[FacturaController::class, 'formbuscar']);
Route::POST('factura/buscar',[FacturaController::class, 'buscar']);

Route::get('factura/actualizar/{id}', [FacturaController::class, 'formactualizar']);
Route::post('factura/actualizar/{id}', [FacturaController::class, 'actualizar']);
