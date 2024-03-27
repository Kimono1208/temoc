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
            <div class="table-responsive p-0">
              <table class="table table-sm small-text">
                <thead>
                    <tr>
                        <th scope="col">ID Llanta</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Ancho</th>
                        <th scope="col">Alto</th>
                        <th scope="col">Rin</th>
                        <th scope="col">Índice de Carga</th>
                        <th scope="col">Rango de Velocidad</th>
                        <th scope="col">Precio 1</th>
                        <th scope="col">Precio 2</th>
                        <th scope="col">Precio 3</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($llantas as $llanta)
                    <tr>
                        <td>{{ $llanta->id_llanta }}</td>
                        <td>{{ $llanta->marca }}</td>
                        <td>{{ $llanta->ancho }}</td>
                        <td>{{ $llanta->alto }}</td>
                        <td>{{ $llanta->rin }}</td>
                        <td>{{ $llanta->indice_carga }}</td>
                        <td>{{ $llanta->rango_velocidad }}</td>
                        <td>{{ $llanta->precio1 }}</td>
                        <td>{{ $llanta->precio2 }}</td>
                        <td>{{ $llanta->precio3 }}</td>
                        <td>{{ $llanta->fecha }}</td>
                        <td>{{ $llanta->costo }}</td>
                        <td>{{ $llanta->proveedor }}</td>
                        <td><a href="/llantas/{{ $llanta->id_llanta }}/editar">Editar</a></td>
                        <td><a href="/llantas/{{ $llanta->id_llanta }}">Borrar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

 @endsection


