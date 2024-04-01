<?php

use App\Http\Controllers\LlantasController;
use App\Http\Controllers\ProveedoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

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
Route::view('formulario','admin/formularios/fllantas');

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



