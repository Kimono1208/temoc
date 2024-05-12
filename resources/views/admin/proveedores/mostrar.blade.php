
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
    
  
  <div class="container-fluid bg-danger text-center" style="height: 100vh">
    <div class="container text-center ">
        <h1 class="text-white pt-5">¿Estas seguro de eliminar?</h1>
    </div>
    <br>
    <div class="container w-75 mt-5 border shadow rounded p-3 bg-light">
  <form class="row g-3 needs-validation" novalidate method="POST" action="/proveedores/{{$proveedores->id_proveedor}}" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Nombre Proveedor</label>
        <div class="input-group has-validation">
            <input type="text" class="form-control" id="validationCustomUsername" name="nombre" aria-describedby="inputGroupPrepend" readonly value="{{$proveedores->nombre}}">
            <div class="invalid-feedback">
                Ingresa el nombre del proveedor
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <label for="validationCustom05" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="validationCustom05" name="direccion" readonly value="{{$proveedores->direccion}}">
        <div class="invalid-feedback">
            Por favor ingresa una dirección válida
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Producto</label>
        <input type="text" class="form-control" id="validationCustom05" name="producto" readonly value="{{$proveedores->producto}}">
        <div class="invalid-feedback">
            Por favor ingresa un producto válido
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom05" class="form-label">RFC</label>
        <input type="text" class="form-control" id="validationCustom05" name="rfc" readonly value="{{$proveedores->rfc}}">
        <div class="invalid-feedback">
            Por favor ingresa un RFC válido
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom05" class="form-label">CLABE</label>
        <input type="text" class="form-control" id="validationCustom05" name="clabe" readonly value="{{$proveedores->clabe}}">
        <div class="invalid-feedback">
            Por favor ingresa una CLABE válida
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Banco</label>
        <input type="text" class="form-control" id="validationCustom05" name="banco" readonly value="{{$proveedores->banco}}">
        <div class="invalid-feedback">
            Por favor ingresa un banco válido
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="validationCustom01" name="telefono" readonly value="{{$proveedores->telefono}}">
        <div class="invalid-feedback">
            Por favor ingrese un teléfono válido
        </div>
    </div>
    <div class="col-md-5">
        <label for="validationCustom01" class="form-label">Correo</label>
        <input type="text" class="form-control" id="validationCustom01" name="correo" readonly value="{{$proveedores->correo}}">
        <div class="invalid-feedback">
            Por favor ingrese un correo electrónico válido
        </div>
    </div>
    <div class="col-md-5">
        <label for="validationCustom05" class="form-label">Imagen</label>
        <img src="/storage/{{$proveedores->imagen_prov}}" alt="{{$proveedores->imagen_prov}}" width="100">
    </div>
    <div class="col-md-8">
        <button class="btn btn-primary" type="submit">Borrar</button>
        <a href="/proveedores" class="btn btn-primary">Regresar</a>
    </div>
</form>

</body>
</html>