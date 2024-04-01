<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  


    <form class="row g-3 needs-validation" novalidate method="POST" action="/rines/{{$rin->id_rines}}" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Marca</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationCustomUsername" name="marca" aria-describedby="inputGroupPrepend" readonly value="{{$rin->marca}}">
                <div class="invalid-feedback">
                    Ingresa la marca del rin
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Barrenación</label>
            <input type="text" class="form-control" id="validationCustom05" name="barrenacion" readonly value="{{$rin->barrenacion}}">
            <div class="invalid-feedback">
                Por favor ingresa una barrenación válida
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Medida</label>
            <input type="text" class="form-control" id="validationCustom05" name="medida" readonly value="{{$rin->medida}}">
            <div class="invalid-feedback">
                Por favor ingresa una medida válida
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Perforación</label>
            <input type="text" class="form-control" id="validationCustom05" name="perforacion" readonly value="{{$rin->perforacion}}">
            <div class="invalid-feedback">
                Por favor ingresa una perforación válida
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Ancho</label>
            <input type="text" class="form-control" id="validationCustom05" name="ancho" readonly value="{{$rin->ancho}}">
            <div class="invalid-feedback">
                Por favor ingresa un ancho válido
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Precio 1</label>
            <input type="text" class="form-control" id="validationCustom05" name="precio_1" readonly value="{{$rin->precio_1}}">
            <div class="invalid-feedback">
                Por favor ingresa un precio válido
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Precio 2</label>
            <input type="text" class="form-control" id="validationCustom05" name="precio_2" readonly value="{{$rin->precio_2}}">
            <div class="invalid-feedback">
                Por favor ingresa un precio válido
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Precio 3</label>
            <input type="text" class="form-control" id="validationCustom05" name="precio_3" readonly value="{{$rin->precio_3}}">
            <div class="invalid-feedback">
                Por favor ingresa un precio válido
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Fecha</label>
            <input type="text" class="form-control" id="validationCustom05" name="fecha" readonly value="{{$rin->fecha}}">
            <div class="invalid-feedback">
                Por favor ingresa una fecha válida
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Proveedor</label>
            <input type="text" class="form-control" id="validationCustom05" name="proveedor" readonly value="{{$rin->proveedor}}">
            <div class="invalid-feedback">
                Por favor ingresa un proveedor válido
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Costo</label>
            <input type="text" class="form-control" id="validationCustom05" name="costo" readonly value="{{$rin->costo}}">
            <div class="invalid-feedback">
                Por favor ingresa un costo válido
            </div>
        </div>
        <div class="col-md-8">
            <button class="btn btn-primary" type="submit">Borrar</button>
            <a href="/rines" class="btn btn-primary">Regresar</a>
        </div>
    </form>
    

</body>
</html>