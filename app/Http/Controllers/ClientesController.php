<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function guardar(Request $request)
    {
        // dd($request->all());
        $id =DB::table('clientes')->insertGetId([
            'id_cliente' => $request->id_cliente,
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'rfc' => $request->rfc,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'imagen' => 'imagenes/clientes/clientes_default.jpg',
        ]);
        // dd($request);
    
          if($request->hasFile('imagen')){
              $extension=$request->imagen->extension();
              $nuevo='clientes_' .$id.'.'.$extension;
              $ruta=$request->imagen->storeAS('imagenes/clientes',$nuevo,'public');
              $affected = DB::table('clientes')
              ->where('id_cliente',$id)
              ->update([
                  'imagen' => $ruta,
              ]); 
            }

          $cliente = DB::table('clientes')->get();
          return view('/admin/clientes/data',['cliente' => $cliente]);
}
    public function actualizar(Request $request, $id){
        $affected = DB::table('clientes')
        ->where('id_cliente',$id)
        ->update([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'rfc' => $request->rfc,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'imagen' => 'imagenes/clientes/clientes_default.jpg',
        ]);
        if($request->hasFile('imagen')){
            $extension=$request->imagen->extension();
            $nuevo='clientes_' .$id.'.'.$extension;
            $ruta=$request->imagen->storeAS('imagenes/clientes',$nuevo,'public');
            $affected = DB::table('clientes')
            ->where('id_cliente',$id)
            ->update([
                'imagen' => $ruta,
            ]); 
          }
        // dd($affected);
        $cliente = DB::table('clientes')->get();
        return view('/admin/clientes/data',['cliente'=> $cliente]);
    }
    public function borrar($id){
        $deleted = DB::table('clientes')->where('id_cliente',$id)->delete();
        $cliente = DB::table('clientes')->get();
        return view('/admin/clientes/data',['cliente'=> $cliente]);
    }
    public function listado(){        
        $cliente = DB::table('clientes')->get();
        return view('/admin/clientes/data',['cliente'=> $cliente]);
    }
    public function show($id){
        $clientes = DB::table('clientes')->where('id_cliente',$id)->first();
        return view('/admin/clientes/mostrar', ['clientes'=>$clientes]);
    }
    public function editar($id){
        $clientes = DB::table('clientes')->where('id_cliente',$id)->first();
        return view ('/admin/clientes/editar',['clientes'=>$clientes]);
    }
    public function create(){
        return view ('/admin/clientes/create');
    }
}