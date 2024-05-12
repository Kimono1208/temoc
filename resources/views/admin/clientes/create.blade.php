
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="stylesheet" href="../style.css">
  <title>
    @yield('Temoc llantas y servicios') 
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    

    <main class="main-content position-relative border-radius-lg">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4 p-2">
                        <div class="card-header pb-0">
                            <h6>Clientes</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <form class="row g-3 needs-validation" novalidate method="POST" action="/clientes"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Nombre Cliente</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" id="validationCustomUsername"
                                            name="nombre" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Ingresa el nombre
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for="validationCustom05" class="form-label">Dirección</label>
                                    <input type="text" class="form-control" id="validationCustom05" name="direccion"
                                        required>
                                    <div class="invalid-feedback">
                                        Por favor ingresa una dirección válida
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom03" class="form-label">Ciudad</label>
                                    <input type="text" class="form-control" id="validationCustom03" name="ciudad"
                                        required>
                                    <div class="invalid-feedback">
                                        Por favor ingresa una Ciudad válida
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="validationCustom03" class="form-label">Código Postal</label>
                                    <input type="text" class="form-control" id="validationCustom03" name="código_postal"
                                        required>
                                    <div class="invalid-feedback">
                                        Por favor ingresa un CP
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="telefono"
                                        required>
                                    <div class="invalid-feedback">
                                        Por favor ingrese un teléfono válido
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom01" class="form-label">RFC</label>
                                        <input type="text" class="form-control" id="validationCustom01" name="rfc"
                                            required>
                                        <div class="invalid-feedback">
                                            Por favor ingrese un RFC válido
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="validationCustom01" class="form-label">Correo</label>
                                        <input type="text" class="form-control" id="validationCustom01" name="correo"
                                            required>
                                        <div class="invalid-feedback">
                                            Por favor ingrese un correo electrónico válido
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="validationCustom05" class="form-label">Imagen</label>
                                        <input type="file" accept="image/*" class="form-control" id="validationCustom05"
                                            name="imagen">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                                required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Acepto los términos y condiciones
                                            </label>
                                            <div class="invalid-feedback">
                                                Debes aceptarlos antes de enviar
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Enviar</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
{{--  @endsection  --}}
