<?php

namespace App\Http\Middleware;

use Closure;

class InitializeCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Verificar si no existe el carrito en la sesión
        if (!session()->has('cart')) {
            // Inicializar el carrito como un array vacío
            session(['cart' => []]);
        }

        return $next($request);
    }
}
