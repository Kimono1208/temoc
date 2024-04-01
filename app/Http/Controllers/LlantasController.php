<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LlantasController extends Controller
{
    public function guardar(Request $request)
    {
        // Se guarda en una tabla de la base de datos
        $id_llanta = DB::table('llantas')->insertGetId([
            'marca' => $request->marca,
            'ancho' => $request->ancho,
            'alto' => $request->alto,
            'rin' => $request->rin,
            'indice_carga' => $request->indice_carga,
            'rango_velocidad' => $request->rango_velocidad,
        ]);
        $precio1 = floatval($request->precio1);
        $precio2 = floatval($request->precio2);
        $precio3 = floatval($request->precio3);
        // Se guarda en una tabla donde solo se registran los precios, fecha y costo
        $id_precio = DB::table('precios_llantas')->insertGetId([
            'id_llanta' => $id_llanta,
            'precio_1' => $precio1,
            'precio_2' => $precio2,
            'precio_3' => $precio3,
            'fecha' => $request->fecha,
            'costo' => $request->costo,
        ]);
    
        // Se guarda la asociación entre la llanta y el proveedor
        DB::table('llanta_proveedor')->insert([
            'id_llanta' => $id_llanta,
            'id_proveedor' => $request->id_proveedor,
            'id_precio' => $id_precio, // Asumiendo que también quieres registrar el ID del precio aquí
        ]);
        $llantas = DB::table('llantas')
        ->join('precios_llantas', 'llantas.id_llanta', '=', 'precios_llantas.id_llanta')
        ->join('llanta_proveedor', 'llantas.id_llanta', '=', 'llanta_proveedor.id_llanta')
        ->join('proveedores', 'llanta_proveedor.id_proveedor', '=', 'proveedores.id_proveedor')
        ->select(
            'llantas.id_llanta',
            'llantas.marca',
            'llantas.ancho',
            'llantas.alto',
            'llantas.rin',
            'llantas.indice_carga',
            'llantas.rango_velocidad',
            'precios_llantas.precio_1',
            'precios_llantas.precio_2',
            'precios_llantas.precio_3',
            'precios_llantas.fecha',
            'precios_llantas.costo',
            'proveedores.nombre AS nombre_proveedor', 
            'llanta_proveedor.id_proveedor' // Alias para evitar conflictos de nombres
        )
        ->get();

    // Devolvemos la vista con los datos de las llantas, sus precios y el nombre del proveedor
    return view('/admin/llantas/data', ['llantas' => $llantas]);
    }


    //     if ($request->hasFile('imagen')) {
    //         $imagen = $request->file('imagen');
    //         $nombre_imagen = 'llanta_' . $id . '.' . $imagen->getClientOriginalExtension();
    //         $ruta = $imagen->storeAs('imagenes/llantas', $nombre_imagen, 'public');

    //         DB::table('llantas')
    //             ->where('id_llanta', $id)
    //             ->update(['imagen' => $ruta]);
    //     }

        
     

    public function actualizar(Request $request, $id)
    {
        $affected = DB::table('llantas')
            ->where('id_llanta', $id)
            ->update([
                'marca' => $request->marca,
                'ancho' => $request->ancho,
                'alto' => $request->alto,
                'rin' => $request->rin,
                'indice_carga' => $request->indice_carga,
                'rango_velocidad' => $request->rango_velocidad,
                'precio_1' => $request->precio_1,
                'precio_2' => $request->precio_2,
                'precio_3' => $request->precio_3,
                'fecha' => $request->fecha,
                'costo' => $request->costo,
                'proveedor' => $request->proveedor,
            ]);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombre_imagen = 'llanta_' . $id . '.' . $imagen->getClientOriginalExtension();
            $ruta = $imagen->storeAs('imagenes/llantas', $nombre_imagen, 'public');

            DB::table('llantas')
                ->where('id_llanta', $id)
                ->update(['imagen' => $ruta]);
        }

        return redirect()->route('/admin/llantas/data')->with('success', 'Llanta actualizada exitosamente');
    }

    public function borrar($id)
    {
        $llanta = DB::table('llantas')->where('id_llanta', $id)->first();

        // if ($llanta->imagen) {
        //     Storage::disk('public')->delete($llanta->imagen);
        // }

        $deleted = DB::table('llantas')->where('id_llanta', $id)->delete();

        return redirect()->route('/admin/llantas/data')->with('success', 'Llanta eliminada exitosamente');
    }

    public function listado()
    {
        $llantas = DB::table('llantas')->get();
        return view('/admin/llantas/data', ['llantas' => $llantas]);
    }
    

    public function mostrar($id)
    {
        $llanta = DB::table('llantas')->where('id_llanta', $id)->first();
        return view('llantas.mostrar', ['llanta' => $llanta]);
    }

    public function editar($id)
    {
        $llanta = DB::table('llantas')->where('id_llanta', $id)->first();
        return view('llantas.editar', ['llanta' => $llanta]);
    }

    public function create()
    {
        $proveedores = DB::table('proveedores')->get(); // Obtener la lista de proveedores
        return view('/admin/llantas/create', ['proveedores' => $proveedores]);
    }
}
