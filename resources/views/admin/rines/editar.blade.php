

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    
  
  
    <form class="row g-3 needs-validation" novalidate method="POST" action="/rines/{{$rines->id_rin}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Marca</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationCustomUsername" name="marca" aria-describedby="inputGroupPrepend" required value="{{${{$rines->marca}}">
                <div class="invalid-feedback">
                    Ingresa la marca
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Barrenación</label>
            <input type="text" class="form-control" id="validationCustom02" name="barrenacion" required value="{{$rines->barrenacion}}">
            <div class="invalid-feedback">
                Ingresa la barrenación
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Medida</label>
            <input type="text" class="form-control" id="validationCustom03" name="medida" required value="{{$rines->medida}}">
            <div class="invalid-feedback">
                Ingresa la medida
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Perforación</label>
            <input type="text" class="form-control" id="validationCustom04" name="perforacion" required value="{{$rines->perforacion}}">
            <div class="invalid-feedback">
                Ingresa la perforación
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Ancho</label>
            <input type="text" class="form-control" id="validationCustom05" name="ancho" required value="{{$rines->ancho}}">
            <div class="invalid-feedback">
                Ingresa el ancho
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom06" class="form-label">Precio 1</label>
            <input type="text" class="form-control" id="validationCustom06" name="precio1" required value="{{$rines->precio1}}">
            <div class="invalid-feedback">
                Ingresa el Precio 1
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom07" class="form-label">Precio 2</label>
            <input type="text" class="form-control" id="validationCustom07" name="precio2" required value="{{$rines->precio2}}">
            <div class="invalid-feedback">
                Ingresa el Precio 2
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom08" class="form-label">Precio 3</label>
            <input type="text" class="form-control" id="validationCustom08" name="precio3" required value="{{$rines->precio3}}">
            <div class="invalid-feedback">
                Ingresa el Precio 3
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom09" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="validationCustom09" name="fecha" required value="{{$rines->fecha}}">
            <div class="invalid-feedback">
                Ingresa la fecha
            </div>
        </div>
        <div class="col-md-5">
            <label for="validationCustom10" class="form-label">Proveedor</label>
            <input type="text" class="form-control" id="validationCustom10" name="proveedor" required value="{{$rines->proveedor}}">
            <div class="invalid-feedback">
                Ingresa el proveedor
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom11" class="form-label">Costo</label>
            <input type="text" class="form-control" id="validationCustom11" name="costo" required value="{{$rines->costo}}">
            <div class="invalid-feedback">
                Ingresa el costo
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
            &nbsp
            <a href="/rines" class="btn btn-primary">Regresar</a>
        </div>
    </form>
    
  
  </body>
  </html>