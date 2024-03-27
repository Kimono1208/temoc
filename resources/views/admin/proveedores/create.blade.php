<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro</title>
</head>
<body>
  

  <form class="row g-3 needs-validation" novalidate method="POST" action="/proveedores" enctype="multipart/form-data">
    @csrf
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Nombre Proveedor</label>
        <input type="text" class="form-control" id="validationCustom02" name="nombre" required>
        <div class="invalid-feedback">
            Por favor ingresa el nombre del proveedor
        </div>
    </div>
    <div class="col-md-5">
        <label for="validationCustom03" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="validationCustom03" name="direccion" required>
        <div class="invalid-feedback">
            Por favor ingresa una dirección válida
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom04" class="form-label">Producto</label>
        <input type="text" class="form-control" id="validationCustom04" name="producto" required>
        <div class="invalid-feedback">
            Por favor ingresa el producto
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom05" class="form-label">RFC</label>
        <input type="text" class="form-control" id="validationCustom05" name="rfc" required>
        <div class="invalid-feedback">
            Por favor ingresa un RFC válido
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom06" class="form-label">CLABE</label>
        <input type="text" class="form-control" id="validationCustom06" name="clabe" required>
        <div class="invalid-feedback">
            Por favor ingresa una CLABE válida
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom07" class="form-label">Banco</label>
        <input type="text" class="form-control" id="validationCustom07" name="banco" required>
        <div class="invalid-feedback">
            Por favor ingresa un banco válido
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom08" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="validationCustom08" name="telefono" required>
        <div class="invalid-feedback">
            Por favor ingresa un teléfono válido
        </div>
    </div>
    <div class="col-md-5">
        <label for="validationCustom09" class="form-label">Correo</label>
        <input type="text" class="form-control" id="validationCustom09" name="correo" required>
        <div class="invalid-feedback">
            Por favor ingresa un correo electrónico válido
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom10" class="form-label">Crédito</label>
        <input type="text" class="form-control" id="validationCustom10" name="credito" required>
        <div class="invalid-feedback">
            Por favor ingresa el crédito
        </div>
    </div>
    <div class="col-md-5">
        <label for="validationCustom11" class="form-label">Imagen</label>
        <input type="file" accept="image/*" class="form-control" id="validationCustom11" name="imagen_prov">
        <div class="invalid-feedback">
            Por favor selecciona una imagen
        </div>
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
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
    </div>
</form>

</body>
</html>