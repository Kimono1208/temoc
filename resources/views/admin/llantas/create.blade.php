@extends('admin/plantilla/plantilla')

@section('titulo')

@section('contenido')

<main class="main-content position-relative border-radius-lg ">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Proveedores</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <form class="row g-3 needs-validation" novalidate method="POST" action="/llantas" enctype="multipart/form-data">
                @csrf
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Marca</label>
                    <input type="text" class="form-control" id="validationCustom02" name="marca" required>
                    <div class="invalid-feedback">
                        Por favor ingresa la marca de la llanta
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom03" class="form-label">Ancho</label>
                    <input type="text" class="form-control" id="validationCustom03" name="ancho" required>
                    <div class="invalid-feedback">
                        Por favor ingresa el ancho de la llanta
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom04" class="form-label">Alto</label>
                    <input type="text" class="form-control" id="validationCustom04" name="alto" required>
                    <div class="invalid-feedback">
                        Por favor ingresa el alto de la llanta
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom05" class="form-label">Rin</label>
                    <input type="text" class="form-control" id="validationCustom05" name="rin" required>
                    <div class="invalid-feedback">
                        Por favor ingresa el rin de la llanta
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom06" class="form-label">Índice de Carga</label>
                    <input type="text" class="form-control" id="validationCustom06" name="indice_carga" required>
                    <div class="invalid-feedback">
                        Por favor ingresa el índice de carga
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom07" class="form-label">Rango de Velocidad</label>
                    <input type="text" class="form-control" id="validationCustom07" name="rango_velocidad" required>
                    <div class="invalid-feedback">
                        Por favor ingresa el rango de velocidad
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom08" class="form-label">Precio 1</label>
                    <input type="number" step="any" class="form-control" id="validationCustom08" name="precio1" required>
                    <div class="invalid-feedback">
                        Por favor ingresa el precio 1
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom09" class="form-label">Precio 2</label>
                    <input type="number" step="any" class="form-control" id="validationCustom09" name="precio2" required>
                    <div class="invalid-feedback">
                        Por favor ingresa el precio 2
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationCustom10" class="form-label">Precio 3</label>
                    <input type="number" step="any" class="form-control" id="validationCustom10" name="precio3" required>
                    <div class="invalid-feedback">
                        Por favor ingresa el precio 3
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom11" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="validationCustom11" name="fecha" required>
                    <div class="invalid-feedback">
                        Por favor ingresa la fecha
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom12" class="form-label">Costo</label>
                    <input type="text" class="form-control" id="validationCustom12" name="costo" required>
                    <div class="invalid-feedback">
                        Por favor ingresa el costo
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom13" class="form-label">Proveedor</label>
                    <select class="form-select" id="validationCustom13" name="id_proveedor" required>
                        <option value="" disabled selected>Selecciona un proveedor</option>
                        @foreach ($proveedores as $proveedor)
                            <option value="{{ $proveedor->id_proveedor }}">{{ $proveedor->nombre }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Por favor selecciona un proveedor
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom14" class="form-label">Fotos</label>
                    <input type="file" class="form-control" id="validationCustom14" name="fotos[]" multiple required>
                    <div class="invalid-feedback">
                        Por favor selecciona al menos una foto
                    </div>
                </div>
                {{--  <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Acepto los términos y condiciones
                        </label>
                        <div class="invalid-feedback">
                            Debes aceptarlos antes de enviar
                        </div>
                    </div>  --}}
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

 @endsection
