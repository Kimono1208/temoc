<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  


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