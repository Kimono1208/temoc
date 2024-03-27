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
                        <th scope="col">ID Rin</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Barrenación</th>
                        <th scope="col">Medida</th>
                        <th scope="col">Perforación</th>
                        <th scope="col">Ancho</th>
                        <th scope="col">Precio 1</th>
                        <th scope="col">Precio 2</th>
                        <th scope="col">Precio 3</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rines as $rin)
                    <tr>
                        <td>{{ $rin->id_rines }}</td>
                        <td>{{ $rin->marca }}</td>
                        <td>{{ $rin->barrenacion }}</td>
                        <td>{{ $rin->medida }}</td>
                        <td>{{ $rin->perforacion }}</td>
                        <td>{{ $rin->ancho }}</td>
                        <td>{{ $rin->precio1 }}</td>
                        <td>{{ $rin->precio2 }}</td>
                        <td>{{ $rin->precio3 }}</td>
                        <td>{{ $rin->fecha }}</td>
                        <td>{{ $rin->proveedor }}</td>
                        <td>{{ $rin->costo }}</td>
                        <td><a href="/rines/{{ $rin->id_rines }}/editar">Editar</a></td>
                        <td><a href="/rines/{{ $rin->id_rines }}">Borrar</a></td>
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


