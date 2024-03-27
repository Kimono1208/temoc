

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
      @method('PUT')
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Nombre Cliente</label>
          <div class="input-group has-validation">
            <input type="text" class="form-control" id="validationCustomUsername" name="nombre" aria-describedby="inputGroupPrepend" required value="{{$clientes->nombre}}">
            <div class="invalid-feedback">
              Ingresa el nombre
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <label for="validationCustom05" class="form-label">direccion</label>
          <input type="text" class="form-control" id="validationCustom05" name="direccion" required value="{{$clientes->direccion}}">
          <div class="invalid-feedback">
          Por favor ingresa una direccion válida
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">RFC</label>
          <input type="text" class="form-control" id="validationCustom01" name="rfc" required value="{{$clientes->rfc}}">
          <div class="invalid-feedback">
            Por favor ingrese un RFC válido
          </div>
      </div>
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">telefono</label>
          <input type="text" class="form-control" id="validationCustom01" name="telefono" required value="{{$clientes->telefono}}">
          <div class="invalid-feedback">
            Por favor ingrese un telefono válido
          </div>
        </div>
        <div class="col-md-5">
          <label for="validationCustom01" class="form-label">Correo</label>
          <input type="text" class="form-control" id="validationCustom01" name="correo" required value="{{$clientes->correo}}">
          <div class="invalid-feedback">
            Por favor ingrese un correo electrónico válido
          </div>
        </div>
        <div class="col-md-5">
          <label for="validationCustom05" class="form-label">Imagen</label>
          <td><img src="/storage/{{$clientes->imagen}}" alt="{{$clientes->imagen}}" width="100"></a></td>
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
        &nbsp
        <a href="/clientes" class="btn btn-primary">Regresar</a>
  </div>
  </form>
  </body>
  </html>