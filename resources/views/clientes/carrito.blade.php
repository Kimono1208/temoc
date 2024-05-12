<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Mover estilos al head -->
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #cb1111;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgb(203, 23, 17), rgb(252, 238, 37));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgb(203, 23, 17), rgb(252, 238, 37))
        }
    </style>
</head>

<body>
    <section class="h-100 gradient-custom">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Cart - {{ count(session('cart')) }} items</h5>
                        </div>
                        <div class="card-body">
                            <!-- Single item -->
                            @php $total = 0 @endphp
                            @if (session('cart'))
                                @foreach (session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                    <tr data-id="{{ $id }}">
                                        <td data-th="Product">
                                            <div class="row">
                                                <div class="col-sm-3 hidden-xs">
                                                    @foreach ($products as $product)
                                                        @if ($product->id_llanta == $id)
                                                            @if ($product->fotos->isNotEmpty())
                                                                <img class="card-img-top"
                                                                    src="/storage/{{ $product->fotos->first()->ruta }}"
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
                                        <td data-th="Subtotal" class="text-center">
                                            ${{ $details['price'] * $details['quantity'] }}</td>
                                        <td class="actions" data-th="">
                                            <button class="btn btn-danger btn-sm remove-from-cart"><i
                                                    class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p><strong>Expected shipping delivery</strong></p>
                            <p class="mb-0">12.10.2020 - 14.10.2020</p>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body">
                            <p><strong>We accept</strong></p>
                            <!-- Aquí van tus imágenes de métodos de pago -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Summary</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Products
                                    <span>${{ $total }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Shipping
                                    <span>Gratis</span>
                                </li>
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span><strong>${{ $total }}</strong></span>
                                </li>
                            </ul>
                            <a href="{{ url('/productos') }}" class="btn btn-warning btn-lg btn-block"><i
                                    class="fa fa-angle-left"></i> Continue Shopping</a>
                            <button type="button" class="btn btn-success btn-lg btn-block">Go to checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script type="text/javascript">
        $(".update-cart").change(function(e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('carrito.actualizar', ['id' => $product->id_llanta]) }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Are you sure want to remove?")) {
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
    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Agrega tus scripts personalizados aquí -->
</body>

</html>
