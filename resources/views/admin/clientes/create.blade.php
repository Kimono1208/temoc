<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro</title>
</head>
<body>
  

<form class="row g-3 needs-validation" novalidate method="POST" action="/clientes" enctype="multipart/form-data">
    @csrf
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Nombre Cliente</label>
        <div class="input-group has-validation">
          <input type="text" class="form-control" id="validationCustomUsername" name="nombre" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Ingresa el nombre
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <label for="validationCustom05" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="validationCustom05" name="direccion" required>
        <div class="invalid-feedback">
        Por favor ingresa una dirección válida
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom03" class="form-label">Ciudad</label>
        <input type="text" class="form-control" id="validationCustom03" name="ciudad" required>
        <div class="invalid-feedback">
          Por favor ingresa una Ciudad válida
        </div>
      </div>
      <div class="col-md-3">
        <label for="validationCustom03" class="form-label">Código Postal</label>
        <input type="text" class="form-control" id="validationCustom03" name="código_postal" required>
        <div class="invalid-feedback">
          Por favor ingresa un CP 
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="validationCustom01" name="telefono" required>
        <div class="invalid-feedback">
          Por favor ingrese un teléfono válido
        </div>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">RFC</label>
          <input type="text" class="form-control" id="validationCustom01" name="rfc" required>
          <div class="invalid-feedback">
            Por favor ingrese un RFC válido
          </div>
      </div>
      <div class="col-md-5">
        <label for="validationCustom01" class="form-label">Correo</label>
        <input type="text" class="form-control" id="validationCustom01" name="correo" required>
        <div class="invalid-feedback">
          Por favor ingrese un correo electrónico válido
        </div>
      </div>
      <div class="col-md-5">
        <label for="validationCustom05" class="form-label">Imagen</label>
        <input type="file" accept="image/*" class="form-control" id="validationCustom05" name="imagen">
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