@extends('/clientes.layout')

@section('content')
    <div class="row">
        @foreach ($llantas as $product)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    @if ($product->fotos->isNotEmpty())
                        <img class="card-img-top" src="/storage/{{ $product->fotos->first()->ruta }}" alt="Foto de llanta">
                    @else
                        <img class="card-img-top" src="../ruta_por_defecto.jpg" alt="Sin imagen disponible">
                    @endif
                    <div class="caption">
                        <h4>{{ $product->marca }}</h4>
                        <p>{{ $product->ancho }}/{{ $product->alto }}R{{ $product->rin }}</p>
                        <p><strong>Price: </strong> ${{ $product->precio_1 }}</p>
                        <form method="POST" action="{{ route('carrito.agregar', $product->id_llanta) }}">
                            <!-- Debug statement para mostrar la URL de la acción del formulario -->
                          
                            @csrf
                            <button type="submit" class="btn btn-warning btn-block text-center">Add to cart</button>
                        </form>


                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
