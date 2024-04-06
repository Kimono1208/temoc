<?php

namespace App\Http\Controllers\cliente;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductoCatalogoController extends Controller
{
    //
    public function catalogo()
    {
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

        foreach ($llantas as $llanta) {
            // Obtener las fotos asociadas a la llanta y asignarlas a la propiedad $fotos
            $fotos = DB::table('fotos_llantas')->where('id_llanta', $llanta->id_llanta)->get();
            $llanta->fotos = $fotos;
        }
    // Devolvemos la vista con los datos de las llantas, sus precios y el nombre del proveedor
    return view('/clientes/catalogo', ['llantas' => $llantas]);
    }
    
    public function detalle($id){
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
        foreach ($llantas as $llanta) {
            // Obtener las fotos asociadas a la llanta y asignarlas a la propiedad $fotos
            $fotos = DB::table('fotos_llantas')->where('id_llanta', $llanta->id_llanta)->get();
            $llanta->fotos = $fotos;
        }    

    // Devolvemos la vista con los datos de las llantas, sus precios y el nombre del proveedor
    return view('/clientes/detalle', ['llantas' => $llantas]);
    }

}
