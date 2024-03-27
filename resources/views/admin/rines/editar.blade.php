

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
      @method('PUT')
      <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Nombre</label>
          <div class="input-group has-validation">
              <input type="text" class="form-control" id="validationCustomUsername" name="nombre" aria-describedby="inputGroupPrepend" required value="{{$proveedores->nombre}}">
              <div class="invalid-feedback">
                  Ingresa el nombre
              </div>
          </div>
      </div>
      <div class="col-md-5">
          <label for="validationCustom05" class="form-label">Dirección</label>
          <input type="text" class="form-control" id="validationCustom05" name="direccion" required value="{{$proveedores->direccion}}">
          <div class="invalid-feedback">
              Por favor ingresa una dirección válida
          </div>
      </div>
      <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Producto</label>
          <input type="text" class="form-control" id="validationCustom01" name="producto" required value="{{$proveedores->producto}}">
          <div class="invalid-feedback">
              Por favor ingresa un producto válido
          </div>
      </div>
      <div class="col-md-4">
          <label for="validationCustom01" class="form-label">RFC</label>
          <input type="text" class="form-control" id="validationCustom01" name="rfc" required value="{{$proveedores->rfc}}">
          <div class="invalid-feedback">
              Por favor ingrese un RFC válido
          </div>
      </div>
      <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Clabe</label>
          <input type="text" class="form-control" id="validationCustom01" name="clabe" required value="{{$proveedores->clabe}}">
          <div class="invalid-feedback">
              Por favor ingrese una clabe válida
          </div>
      </div>
      <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Banco</label>
          <input type="text" class="form-control" id="validationCustom01" name="banco" required value="{{$proveedores->banco}}">
          <div class="invalid-feedback">
              Por favor ingrese un banco válido
          </div>
      </div>
      <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Teléfono</label>
          <input type="text" class="form-control" id="validationCustom01" name="telefono" required value="{{$proveedores->telefono}}">
          <div class="invalid-feedback">
              Por favor ingrese un teléfono válido
          </div>
      </div>
      <div class="col-md-5">
          <label for="validationCustom01" class="form-label">Correo</label>
          <input type="text" class="form-control" id="validationCustom01" name="correo" required value="{{$proveedores->correo}}">
          <div class="invalid-feedback">
              Por favor ingrese un correo electrónico válido
          </div>
      </div>
      <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Crédito</label>
          <input type="text" class="form-control" id="validationCustom01" name="credito" required value="{{$proveedores->credito}}">
          <div class="invalid-feedback">
              Por favor ingrese un crédito válido
          </div>
      </div>
      <div class="col-md-5">
          <label for="validationCustom05" class="form-label">Imagen</label>
          <input type="file" accept="image/*" class="form-control" id="validationCustom05" name="imagen">
          <td><img src="/storage/{{$proveedores->imagen_prov}}" alt="{{$proveedores->imagen_prov}}" width="100"></a></td>
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
          <a href="/proveedores" class="btn btn-primary">Regresar</a>
      </div>
  </form>
  
  </body>
  </html>