<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  


  <form class="row g-3 needs-validation" novalidate method="POST" action="/clientes/{{$clientes->id_cliente}}" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Nombre Cliente</label>
        <div class="input-group has-validation">
          <input type="text" class="form-control" id="validationCustomUsername" name="nombre" aria-describedby="inputGroupPrepend" readonly value="{{$clientes->nombre}}">
          <div class="invalid-feedback">
            Ingresa el nombre
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <label for="validationCustom05" class="form-label">Dirección</label>
        <input type="text" class="form-control" id="validationCustom05" name="direccion" readonly value="{{$clientes->direccion}}">
        <div class="invalid-feedback">
        Por favor ingresa una dirección válida
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Teléfono</label>
        <input type="text" class="form-control" id="validationCustom01" name="telefono" readonly value="{{$clientes->telefono}}">
        <div class="invalid-feedback">
          Por favor ingrese un teléfono válido
        </div>
      </div>
      <div class="col-md-5">
        <label for="validationCustom01" class="form-label">Correo</label>
        <input type="text" class="form-control" id="validationCustom01" name="correo" readonly value="{{$clientes->correo}}">
        <div class="invalid-feedback">
          Por favor ingrese un correo electrónico válido
        </div>
      </div>
      <div class="col-md-5">
        <label for="validationCustom05" class="form-label">Imagen</label>
        <td><img src="/storage/{{$clientes->imagen}}" alt="{{$clientes->imagen}}" width="100"></a></td>
        &nbsp
    </div> 
    <div class="col-md-8">
      &nbsp 
        <button class="btn btn-primary" type="submit">Borrar</button>
      &nbsp
      <a href="/clientes" class="btn btn-primary">Regresar</a>
    </div>
  </div>
</form>
</body>
</html>