
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
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Producto</th>
                    <th scope="col">RFC</th>
                    <th scope="col">Clabe</th>
                    <th scope="col">Banco</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Crédito</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($proveedor as $proveedores)
                  <tr>
                    <td>{{ $proveedores->id_proveedor }}</td>
                    <td>{{ $proveedores->nombre }}</td>
                    <td>{{ $proveedores->direccion }}</td>
                    <td>{{ $proveedores->producto }}</td>
                    <td>{{ $proveedores->rfc }}</td>
                    <td>{{ $proveedores->clabe }}</td>
                    <td>{{ $proveedores->banco }}</td>
                    <td>{{ $proveedores->telefono }}</td>
                    <td>{{ $proveedores->correo }}</td>
                    <td>{{ $proveedores->credito }}</td>
                    <td><img src="/storage/{{ $proveedores->imagen_prov }}" alt="{{ $proveedores->imagen_prov }}" width="100"></a></td>
                    <td><a href="/proveedores/{{ $proveedores->id_proveedor }}/editar">Editar</a></td>
                    <td><a href="/proveedores/{{ $proveedores->id_proveedor }}">Borrar</a></td>
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