

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
        @method('PUT')
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Marca</label>
            <input type="text" class="form-control" id="validationCustom01" name="marca" required value="{{$llanta->marca}}">
            <div class="invalid-feedback">
                Por favor ingresa la marca de la llanta
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Ancho</label>
            <input type="text" class="form-control" id="validationCustom02" name="ancho" required value="{{$llanta->ancho}}">
            <div class="invalid-feedback">
                Por favor ingresa el ancho de la llanta
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Alto</label>
            <input type="text" class="form-control" id="validationCustom03" name="alto" required value="{{$llanta->alto}}">
            <div class="invalid-feedback">
                Por favor ingresa el alto de la llanta
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Rin</label>
            <input type="text" class="form-control" id="validationCustom04" name="rin" required value="{{$llanta->rin}}">
            <div class="invalid-feedback">
                Por favor ingresa el rin de la llanta
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom05" class="form-label">Índice de Carga</label>
            <input type="text" class="form-control" id="validationCustom05" name="indice_carga" required value="{{$llanta->indice_carga}}">
            <div class="invalid-feedback">
                Por favor ingresa el índice de carga de la llanta
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom06" class="form-label">Rango de Velocidad</label>
            <input type="text" class="form-control" id="validationCustom06" name="rango_velocidad" required value="{{$llanta->rango_velocidad}}">
            <div class="invalid-feedback">
                Por favor ingresa el rango de velocidad de la llanta
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom07" class="form-label">Precio 1</label>
            <input type="text" class="form-control" id="validationCustom07" name="precio_1" required value="{{$llanta->precio_1}}">
            <div class="invalid-feedback">
                Por favor ingresa el precio 1 de la llanta
            </div>
        </div> 
        <div class="col-md-4">
            <label for="validationCustom07" class="form-label">Precio 2</label>
            <input type="text" class="form-control" id="validationCustom07" name="precio_2" required value="{{$llanta->precio_2}}">
            <div class="invalid-feedback">
                Por favor ingresa el precio 2 de la llanta
            </div>
        </div> 
        <div class="col-md-4">
            <label for="validationCustom07" class="form-label">Precio 3</label>
            <input type="text" class="form-control" id="validationCustom07" name="precio_3" required value="{{$llanta->precio_3}}">
            <div class="invalid-feedback">
                Por favor ingresa el precio 3 de la llanta
            </div>
        </div>
        
        <div class="col-md-4">
            <label for="validationCustom08" class="form-label">Costo</label>
            <input type="text" class="form-control" id="validationCustom08" name="costo" required value="{{$llanta->costo}}">
            <div class="invalid-feedback">
                Por favor ingresa el costo de la llanta
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom09" class="form-label">Proveedor</label>
            <input type="text" class="form-control" id="validationCustom09" name="proveedor" required value="{{$llanta->proveedor}}">
            <div class="invalid-feedback">
                Por favor ingresa el proveedor de la llanta
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom10" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="validationCustom10" name="fecha" required value="{{$llanta->fecha}}">
            <div class="invalid-feedback">
                Por favor ingresa la fecha de la llanta
            </div>
        </div>
        <div class="col-md-5">
            <label for="validationCustom05" class="form-label">Imagen</label>
            <td><img src="/storage/{{$llantas->imagen}}" alt="{{$llanta->imagen}}" width="100"></a></td>
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
            <a href="/llantas" class="btn btn-primary">Regresar</a>
        </div>
    </form>    
  
  </body>
  </html>