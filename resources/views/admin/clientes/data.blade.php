@extends('admin/plantilla/plantilla')

@section('titulo')

@section('contenido')

<main class="main-content position-relative border-radius-lg ">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Clientes</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                                <table class="table table-sm small-text">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Dirección</th>
                                            <th scope="col">RFC</th>
                                            <th scope="col">Teléfono</th>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Imagen</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Borrar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cliente as $clientes)
                                        <tr>
                                            <td>{{ $clientes->id_cliente}}</td>
                                            <td>{{ $clientes->nombre}}</td>
                                            <td>{{ $clientes->direccion}}</td>
                                            <td>{{ $clientes->rfc}}</td>
                                            <td>{{ $clientes->telefono}}</td>
                                            <td>{{ $clientes->correo}}</td>
                                            <td><img src="/storage/{{$clientes->imagen}}" alt="{{$clientes->imagen}}" width="100"></a></td>
                                            <td><a href="/clientes/{{ $clientes->id_cliente }}/editar">Editar</a></td>
                                            <td><a href="/clientes/{{ $clientes->id_cliente }}">Borrar</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
        </div>
      </div>
    </div>
  </div>
</main>

 @endsection


