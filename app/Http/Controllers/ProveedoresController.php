<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProveedoresController extends Controller
{
    public function guardar(Request $request)
    {
        // dd($request->all());
        $id = DB::table('proveedores')->insertGetId([
            'id_proveedor' => $request->id_proveedor,
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'producto' => $request->producto,
            'rfc' => $request->rfc,
            'clabe' => $request->clabe,
            'banco' => $request->banco,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'credito' => $request->credito,
            'imagen_prov' => 'imagenes/proveedores/proveedores_default.jpg',
        ]);
        

        if($request->hasFile('imagen')){
            $extension=$request->imagen->extension();
            $nuevo='proveedores_' .$id.'.'.$extension;
            $ruta=$request->imagen->storeAS('imagenes/proveedores',$nuevo,'public');
            $affected = DB::table('proveedores')
            ->where('id_proveedor',$id)
            ->update([
                'imagen' => $ruta,
            ]); 
          }
        // dd($request);
        $proveedor = DB::table('proveedores')->get();
        return view('/admin/proveedores/data',['proveedor'=> $proveedor]);
    }
    public function actualizar(Request $request, $id){
        $affected = DB::table('proveedores')
        ->where('id_proveedor',$id)
        ->update([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'producto' => $request->producto,
            'rfc' => $request->rfc,
            'clabe' => $request->clabe,
            'banco' => $request->banco,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'credito' => $request->credito,
            'imagen_prov' => 'imagenes/proveedores/proveedores_default.jpg',
        ]);
        if($request->hasFile('imagen')){
            $extension=$request->imagen->extension();
            $nuevo='proveedores_' .$id.'.'.$extension;
            $ruta=$request->imagen->storeAS('imagenes/proveedores',$nuevo,'public');
            $affected = DB::table('proveedores')
            ->where('id_proveedor',$id)
            ->update([
                'imagen_prov' => $ruta,
            ]); 
          }
        // dd($affected);
        $proveedor = DB::table('proveedores')->get();
        return view('/admin/proveedores/data',['proveedor'=> $proveedor]);
    }
    public function borrar($id){
        $deleted = DB::table('proveedores')->where('id_proveedor',$id)->delete();
        $proveedor = DB::table('proveedores')->get();
        return view('/admin/proveedores/data',['proveedor'=> $proveedor]);
    }
    public function listado(){
        $proveedor = DB::table('proveedores')->get();
        return view('/admin/proveedores/data',['proveedor'=> $proveedor]);
    }
    public function show($id){
        $proveedores = DB::table('proveedores')->where('id_proveedor',$id)->first();
        return view('/admin/proveedores/mostrar', ['proveedores'=>$proveedores]);
    }
    public function editar($id){
        $proveedores = DB::table('proveedores')->where('id_proveedor',$id)->first();
        return view('/admin/proveedores/editar', ['proveedores'=>$proveedores]);
    }
    public function create(){
        return view ('/admin/proveedores/create');;
    }
}
