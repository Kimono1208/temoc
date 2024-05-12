@extends('/clientes.layout')

@section('content')
 
    {{--  {{ var_dump(session('cart')) }}  --}}

    @if (session('cart') && count(session('cart')) > 0)
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @foreach (session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                    <tr data-id="{{ $id }}">
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs">
                                    @foreach ($products as $product)
                                    @if ($product->id_llanta == $id)
                                        @if ($product->fotos->isNotEmpty())
                                            <img class="card-img-top" src="/storage/{{ $product->fotos->first()->ruta }}"
                                                alt="Foto de llanta">
                                        @else
                                            <img class="card-img-top" src="../ruta_por_defecto.jpg"
                                                alt="Sin imagen disponible">
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">${{ $details['price'] }}</td>
                        <td data-th="Quantity">
                            <input type="number" value="{{ $details['quantity'] }}"
                                class="form-control quantity update-cart" />
                        </td>
                        <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right">
                        <h3><strong>Total ${{ $total }}</strong></h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <a href="{{ url('/catalogo') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar comprando</a>
                        <button class="btn btn-success">Pagar</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    @else
        <div class="text-center">
            <p>Your cart is empty.</p>
            <a href="{{ url('/catalogo') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar comprando</a>
        </div>
    @endif

@endsection

@section('scripts')
    <script type="text/javascript">
        $(".remove-from-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("¿Estás seguro de eliminar este elemento del carrito?")) {
                $.ajax({
                    url: '{{ route('carrito.quitar', ['id' => $product->id_llanta]) }}',
                    method: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        window.location.reload(); // Actualizar la página después de eliminar el producto
                    }
                });
            }
        });

        $(".remove-from-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("¿Estás seguro de eliminar este elemento del carrito?")) {
                $.ajax({
                    url: '{{ route('carrito.quitar', ['id' => $product->id_llanta]) }}',
                    method: "DELETE", // Cambiamos el método a DELETE
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
@endsection
