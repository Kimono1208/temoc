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

    public function detalle($id)
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
        return view('/clientes/detalle', ['llantas' => $llantas]);
    }

    public function agregarcarrito($id)
    {
        // Obtener el producto según el ID
        $product = DB::table('llantas')
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
            ->where('llantas.id_llanta', $id)
            ->first(); // Utiliza first() para obtener solo un registro

        // Verificar si el producto existe
        if (!$product) {
            return redirect()->back()->with('error', 'Producto no encontrado!')->setStatusCode(404);
        }

        // Obtener las fotos asociadas a la llanta y asignarlas a la propiedad $fotos
        $fotos = DB::table('fotos_llantas')->where('id_llanta', $id)->get();

        // Verificar si hay fotos asociadas a la llanta
        $defaultImagePath = 'ruta_por_defecto.jpg'; // Replace with the actual path to your default image

        // Check if there are photos associated with the llanta
        if ($fotos->isEmpty()) {
            // If no photos are available, use the default image
            $image = $defaultImagePath;
        } else {
            // If photos are available, use the first image
            $image = $fotos[0]->ruta;
        }

        // Obtener el carrito de la sesión
        $cart = session()->get('cart');

        if ($cart === null) {
            $cart = [];
        }

        // Verificar si el producto ya está en el carrito
        if (isset($cart[$id])) {
            // Incrementar la cantidad si el producto ya está en el carrito
            $cart[$id]['quantity']++;
        } else {
            // Agregar el producto al carrito
            $cart[$id] = [
                "name" => $product->marca,
                "quantity" => 1,
                "price" => $product->precio_1, // Suponiendo que $precio_1 es el precio deseado
                //  "image" => $fotos[0]->ruta_foto->first(), // Suponiendo que existe una columna 'ruta_foto' en la tabla 'fotos_llantas' para la ruta de la imagen
            ];
        }

        // Actualizar el carrito en la sesión
        session()->put('cart', $cart);

        // Redirigir de nuevo a la página anterior con un mensaje de éxito
        return redirect()->back()->with('success', 'Agregado con exito!');
    }


    public function actualizarcarrito(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Agregado al carrito');
        }
    }


    public function quitarcarrito(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                session()->flash('success', 'Eliminado con exito');
    
                // Verificar si el carrito está vacío
                if (empty($cart)) {
                    session()->flash('empty_cart', 'Your cart is empty.'); // Mensaje de carrito vacío
                    return redirect()->route('catalogo'); // Redirigir a la vista del catálogo
                }
            }
        }
        
        // Redirigir de vuelta a la vista del carrito
        return redirect()->route('carrito.mostrar');
    }

    public function mostrarcarrito()
{
    // Obtener el carrito de la sesión
    $cart = session()->get('cart');

    // Verificar si el carrito está vacío
    if (empty($cart)) {
        return view('/clientes/cart')->with('cart', []); // Pasar un array vacío a la vista si el carrito está vacío
    }

    // Obtener todos los productos una sola vez
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

    // Crear un array asociativo para buscar rápidamente productos por su ID
    $productsById = $llantas->keyBy('id_llanta');

    // Obtener los detalles de los productos en el carrito
    $products = [];
    foreach ($cart as $id => $details) {
        if (isset($productsById[$id])) {
            $product = $productsById[$id];
            // Obtener las fotos asociadas a la llanta y asignarlas al producto
            $fotos = DB::table('fotos_llantas')->where('id_llanta', $id)->get();
            $product->fotos = $fotos;
            $product->quantity = $details['quantity'];
            $product->subtotal = $details['price'] * $details['quantity'];
            $products[] = $product;
        }
    }

    return view('/clientes/cart')->with('products', $products);
}

    public function vaciar_carrito()
    {
        return view('/carrito/vaciar');
    }
    public function finalizar_compra()
    {
        return view('/carrito/finalizar');
    }
    public function productos()
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
        return view('/clientes/products', ['llantas' => $llantas]);
    }


}
