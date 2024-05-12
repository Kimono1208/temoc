<?php

use App\Http\Controllers\LlantasController;
use App\Http\Controllers\ProveedoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\cliente\ProductoCatalogoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view('plantilla','admin/plantilla/plantilla');
Route::view('dashboard','admin/vistas/dashboard');
Route::view('ventas','admin/vistas/billing');
Route::view('perfil','admin/vistas/profile');
Route::view('tablas','admin/vistas/data');
Route::view('app','admin/vistas/virtual-reality');
Route::view('formulario','admin/formularios/fllantas');
// Route::view('catalogo','clientes/catalogo');
Route::view('carrito','clientes/carrito');
Route::view('carrito1','clientes/layout');
Route::view('index','clientes/vistas/index');
Route::view('login','admin/vistas/sign-in');



//clientes
Route::get('/clientes',[ClientesController::class,'listado'])->name('clientes.index');
Route::get('/clientes/{id}',[ClientesController::class,'show'])->name('clientes.show');
Route::get('/admin/clientes/create',[ClientesController::class,'create'])->name('clientes.create');
Route::get('/clientes/{id}/editar',[ClientesController::class,'editar'])->name('clientes.edit');
Route::post('/clientes',[ClientesController::class,'guardar'])->name('clientes.store');
Route::put('/clientes/{id}',[ClientesController::class,'actualizar'])->name('clientes.update');
Route::delete('/clientes/{id}',[ClientesController::class,'borrar'])->name('clientes.delete');

//llantas
 Route::get('/llantas',[LlantasController::class,'listado'])->name('llantas.index');
 Route::get('/llantas/{id}',[LlantasController::class,'show'])->name('llantas.show');
 Route::get('/admin/llantas/create',[LlantasController::class,'create'])->name('llantas.create');
 Route::get('/llantas/{id}/editar',[LlantasController::class,'editar'])->name('llantas.edit');
 Route::post('/llantas',[LlantasController::class,'guardar'])->name('llantas.store');
 Route::put('/llantas/{id}',[LlantasController::class,'actualizar'])->name('llantas.update');
 Route::delete('/llantas/{id}',[LlantasController::class,'borrar'])->name('llantas.delete');

//rines
Route::get('/rines',[LlantasController::class,'listado'])->name('rines.index');
Route::get('/rines/{id}',[LlantasController::class,'show'])->name('rines.show');
Route::get('/admin/rines/create',[LlantasController::class,'create'])->name('rines.create');
Route::get('/rines/{id}/editar',[LlantasController::class,'editar'])->name('rines.edit');
Route::post('/rines',[LlantasController::class,'guardar'])->name('rines.store');
Route::put('/rines/{id}',[LlantasController::class,'actualizar'])->name('rines.update');
Route::delete('/rines/{id}',[LlantasController::class,'borrar'])->name('rines.delete');



//proveedores
Route::get('/proveedores',[ProveedoresController::class,'listado'])->name('proveedores.index');
Route::get('/proveedores/{id}',[ProveedoresController::class,'show'])->name('proveedores.show');
Route::get('/admin/proveedores/create',[ProveedoresController::class,'create'])->name('proveedores.create');
Route::get('/proveedores/{id}/editar',[ProveedoresController::class,'editar'])->name('proveedores.edit');
Route::post('/proveedores',[ProveedoresController::class,'guardar'])->name('proveedores.store');
Route::put('/proveedores/{id}',[ProveedoresController::class,'actualizar'])->name('proveedores.update');
Route::delete('/proveedores/{id}',[ProveedoresController::class,'borrar'])->name('proveedores.delete');

//area clientes
//catalogo
Route::get('/catalogo',[App\Http\Controllers\cliente\ProductoCatalogoController::class, 'catalogo'])->name('catalogo');
Route::get('/detalle/{id}',[App\Http\Controllers\cliente\ProductoCatalogoController::class,'detalle'])->name('detalle');

//carrito compras
Route::post('/agregar_carrito/{id}', [App\Http\Controllers\cliente\ProductoCatalogoController::class, 'agregarcarrito'])->name('carrito.agregar');
Route::get('/actualizar_carrito/{id}',[App\Http\Controllers\cliente\ProductoCatalogoController::class, 'actualizarcarrito'])->name('carrito.actualizar');
Route::delete('/quitar_carrito/{id}',[App\Http\Controllers\cliente\ProductoCatalogoController::class, 'quitarcarrito'])->name('carrito.quitar');
Route::get('/vaciar_carrito',[App\Http\Controllers\cliente\ProductoCatalogoController::class, 'vaciarcarrito'])->name('carrito.vaciar');
Route::get('/mostrar_carrito',[App\Http\Controllers\cliente\ProductoCatalogoController::class, 'mostrarcarrito'])->name('carrito.mostrar');
Route::get('/pagar_carrito',[App\Http\Controllers\cliente\ProductoCatalogoController::class, 'pagarcarrito'])->name('carrito.pagar');
Route::get('/productos',[App\Http\Controllers\cliente\ProductoCatalogoController::class, 'productos'])->name('productos');
