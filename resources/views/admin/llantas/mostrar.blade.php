<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  


    <form class="row g-3 needs-validation" novalidate method="POST" action="/llantas/{{$llanta->id_llanta}}" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Marca</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationCustomUsername" name="marca" aria-describedby="inputGroupPrepend" readonly value="{{$llanta->marca}}">
                <div class="invalid-feedback">
                    Ingresa la marca de la llanta
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Ancho</label>
            <input type="text" class="form-control" id="validationCustom05" name="ancho" readonly value="{{$llanta->ancho}}">
            <div class="invalid-feedback">
                Por favor ingresa un ancho válido
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Alto</label>
            <input type="text" class="form-control" id="validationCustom05" name="alto" readonly value="{{$llanta->alto}}">
            <div class="invalid-feedback">
                Por favor ingresa un alto válido
            </div>
        </div>
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Rin</label>
            <input type="text" class="form-control" id="validationCustom05" name="rin" readonly value="{{$llanta->rin}}">
            <div class="invalid-feedback">
                Por favor ingresa un rin válido
            </div>
        </div>
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Índice de Carga</label>
            <input type="text" class="form-control" id="validationCustom05" name="indice_carga" readonly value="{{$llanta->indice_carga}}">
            <div class="invalid-feedback">
                Por favor ingresa un índice de carga válido
            </div>
        </div>
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Rango de Velocidad</label>
            <input type="text" class="form-control" id="validationCustom05" name="rango_velocidad" readonly value="{{$llanta->rango_velocidad}}">
            <div class="invalid-feedback">
                Por favor ingresa un rango de velocidad válido
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Precio 1</label>
            <input type="text" class="form-control" id="validationCustom05" name="precio_1" readonly value="{{$llanta->precio_1}}">
            <div class="invalid-feedback">
                Por favor ingresa un precio válido
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Precio 2</label>
            <input type="text" class="form-control" id="validationCustom05" name="precio_2" readonly value="{{$llanta->precio_2}}">
            <div class="invalid-feedback">
                Por favor ingresa un precio válido
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Precio 3</label>
            <input type="text" class="form-control" id="validationCustom05" name="precio_3" readonly value="{{$llanta->precio_3}}">
            <div class="invalid-feedback">
                Por favor ingresa un precio válido
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Fecha</label>
            <input type="text" class="form-control" id="validationCustom05" name="fecha" readonly value="{{$llanta->fecha}}">
            <div class="invalid-feedback">
                Por favor ingresa una fecha válida
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Proveedor</label>
            <input type="text" class="form-control" id="validationCustom05" name="proveedor" readonly value="{{$llanta->proveedor}}">
            <div class="invalid-feedback">
                Por favor ingresa un proveedor válido
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Costo</label>
            <input type="text" class="form-control" id="validationCustom05" name="costo" readonly value="{{$llanta->costo}}">
            <div class="invalid-feedback">
                Por favor ingresa un costo válido
            </div>
        </div>
        <div class="col-md-5">
            <label for="validationCustom05" class="form-label">Imagen</label>
            <img src="/storage/{{$llanta->imagen}}" alt="{{$llanta->imagen}}" width="100">
        </div>
        <div class="col-md-8">
            <button class="btn btn-primary" type="submit">Borrar</button>
            <a href="/llantas" class="btn btn-primary">Regresar</a>
        </div>
    </form>    

</body>
</html>