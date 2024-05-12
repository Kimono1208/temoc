<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Catalogo</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-2 m-0 pb-0 mb-0">       
                    <img src="assetss/img/navbar-logo.png" class="w-100" alt="Logo de la Tienda de Llantas" />

                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="col">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="catalogo">Catálogo</a></li>
                        <li class="nav-item"><a class="nav-link" href="index#about">Acerca de Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="index#team">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="index#contact">Contacto</a></li>
                    </ul>
                    </li>
                </ul>
                
                <form class="d-flex">
                    <a href="{{ route('carrito.mostrar') }}" class="btn btn-outline-dark">
                        <span class="bg-light p-1 rounded"> 
                            <i class="bi-cart-fill me-1" aria-hidden="true"></i> Carrito <p class="badge bg-dark m-0">{{ count((array) session('cart')) }}</p>
                        </span>
                    </a>                    
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Catalogo</h1>
                <p class="lead fw-normal text-white-50 mb-0">Todos nuestros productos</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                                class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
                        @php $total = 0 @endphp
                        @foreach ((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    @if (session('cart'))
                        <!-- Inicia sección del carrito -->
                        @foreach (session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    @if (isset($details['fotos']) && $details['fotos']->isNotEmpty())
                                        <img class="card-img-top" src="/storage/{{ $details['fotos']->first()->ruta }}"
                                            alt="Foto de llanta">
                                    @else
                                        <img class="card-img-top" src="../ruta_por_defecto.jpg"
                                            alt="Sin imagen disponible">
                                    @endif
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count">
                                        Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                        <!-- Enlace para ver todo el carrito -->
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ route('carrito.mostrar') }}" class="btn btn-primary btn-block">Ver todo</a>
                            </div>
                        </div>
                        <!-- Mensaje de éxito del carrito (si hay uno) -->
                        <div class="container">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
                <!-- Termina sección del carrito -->

                <!-- Inicia sección del catálogo -->
                @foreach ($llantas as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            @if ($product->fotos->isNotEmpty())
                                <img class="card-img-top" src="/storage/{{ $product->fotos->first()->ruta }}"
                                    alt="Foto de llanta">
                            @else
                                <img class="card-img-top" src="../ruta_por_defecto.jpg" alt="Sin imagen disponible">
                            @endif
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">
                                        {{ $product->ancho }}/{{ $product->alto }}R{{ $product->rin }}
                                    </h5>
                                    {{ $product->marca }}
                                    <!-- Product price-->
                                    $ {{ $product->precio_3 }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <!-- Button trigger modal -->
                                <div class="text-center">
                                    <form method="POST" action="{{ route('carrito.agregar', $product->id_llanta) }}">
                                        <!-- Debug statement para mostrar la URL de la acción del formulario -->
                                      
                                        @csrf
                                        <button type="submit" class="btn btn-outline-dark mt-auto mb-2">Agregar al carrito</button>
                                    </form>
                                    <button type="button" class="btn btn-outline-dark mt-auto" data-bs-toggle="modal"
                                        data-bs-target="#Modal{{ $product->id_llanta }}">
                                        Ver más
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Termina sección del catálogo -->
            </div>
        </div>

        <!-- Modales -->
        @foreach ($llantas as $llanta)
        <div class="modal fade" id="Modal{{ $llanta->id_llanta }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h5 class="modal-title">{{ $llanta->ancho }}/{{ $llanta->alto }}R{{ $llanta->rin }}{{ $llanta->marca }}</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($llanta->fotos as $index => $foto)
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="@if($index === 0) active @endif"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($llanta->fotos as $index => $foto)
                                        <div class="carousel-item @if($index === 0) active @endif">
                                            <img src="/storage/{{ $foto->ruta }}" class="d-block w-100" alt="Foto de llanta">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            
                            
                        </div>
                        <div class="mt-3">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="text-primary" scope="row">Indice de carga</th>
                                        <td>{{ $llanta->indice_carga }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-primary" scope="row">Rango de Velocidad</th>
                                        <td>{{ $llanta->rango_velocidad }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-primary" scope="row">Precio</th>
                                        <td>${{ $llanta->precio_1 }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        
        @endforeach
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>