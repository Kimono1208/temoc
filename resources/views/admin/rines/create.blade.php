@extends('admin/plantilla/plantilla')


<main class="main-content position-relative border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Proveedores</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <form class="row g-3 needs-validation" novalidate method="POST" action="/proveedores" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">ID de Rines</label>
                                <input type="text" class="form-control" id="validationCustom01" name="id_rines" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa un ID de rines
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Marca</label>
                                <input type="text" class="form-control" id="validationCustom02" name="marca" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa la marca de los rines
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">Barrenación</label>
                                <input type="text" class="form-control" id="validationCustom03" name="barrenacion" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa la barrenación
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label">Medida</label>
                                <input type="text" class="form-control" id="validationCustom04" name="medida" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa la medida
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Perforación</label>
                                <input type="text" class="form-control" id="validationCustom05" name="perforacion" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa la perforación
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom06" class="form-label">Ancho</label>
                                <input type="text" class="form-control" id="validationCustom06" name="ancho" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa el ancho
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom07" class="form-label">Precio 1</label>
                                <input type="text" class="form-control" id="validationCustom07" name="precio1" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa el precio 1
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom08" class="form-label">Precio 2</label>
                                <input type="text" class="form-control" id="validationCustom08" name="precio2" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa el precio 2
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom09" class="form-label">Precio 3</label>
                                <input type="text" class="form-control" id="validationCustom09" name="precio3" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa el precio 3
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom10" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="validationCustom10" name="fecha" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa la fecha
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom11" class="form-label">Proveedor</label>
                                <input type="text" class="form-control" id="validationCustom11" name="proveedor" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa el proveedor
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom12" class="form-label">Costo</label>
                                <input type="text" class="form-control" id="validationCustom12" name="costo" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa el costo
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> 

    