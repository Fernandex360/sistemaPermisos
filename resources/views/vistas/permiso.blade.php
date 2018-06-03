@extends('layouts.layout')
@section('titulo','Permiso')
@section('contenido')
<div class="container-fluid">
        <div id="permiso" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar Permiso</h4>
                </div>
                <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="codigo">Codigo</label>
                        <input type="text" class="form-control" ng-model="busqueda" id="codigo" name="codigo">
                    </div>
                    <div class="form-group ">
                        <label for="salida">Fecha de salida</label>
                        <input type="date" class="form-control fj-date" id="salida" name="salida">
                    </div>
                    <div class="form-group ">
                        <label for="regreso">Fecha de Regreso</label>
                        <input type="date" class="form-control fj-date" id="regreso" name="regreso">
                    </div>
                    <div class="form-group">
                        <label for="dias">Cantidad de dias</label>
                        <input type="number" id="dias" name="dias" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="centro">Seleccione Su Centro de Atención</label>
                        <select id="centro" name="centro" class="form-control">
                            <option value="1">Essalud</option>
                            <option value="1">Clinica</option>
                            <option value="1">Clinica Ricardo palma</option>
                            <option value="1">clinica x12</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="centro">Seleccione Su Diagnostico</label>
                        <select id="centro" name="centro" class="form-control">
                            <option value="1">Resfrio</option>
                            <option value="1">xxxx</option>
                            <option value="1">xxxxx</option>
                            <option value="1">xxxxxx</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" value="Registrar" class="btn btn-primary" data-dismiss="modal">
                    <input type="button" value="Cancelar" class="btn btn-danger" data-dismiss="modal">
                </div>
                </div>
                </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <div class="mt-3">
                            <form action="" class="form-inline">
                                    <label for="busqueda">Buscar </label>
                                    <input type="text" ng-model="busqueda" class="form-control ml-3" id="busqueda" name="busqueda">
                                    <input type="button" value="Buscar " class="btn btn-primary ml-3 mr-3">
                                    <input type="button" value="Registrar Nuevo Permiso" class="btn btn-success ml-3 mr-3" data-toggle="modal" data-target="#permiso">
                                </form>
                        </div>
                        <table class="table table-striped table-hover table-sm mt-3">
                            <thead>
                                <th>Codigo</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Dias Permiso</th>
                                <th>Dias Subcidiados</th>
                                <th>Monto Subcidiado</th>
                                <th>Estado</th>
                            </thead>
                            <tbody>
                                <tr ng-repeat="empleado in empleados | filter : busqueda">
                                    
                                    <td>
                                        <input type="button" value="Editar" class="btn btn-primary">
                                    </td>
                                    <td>
                                        <input type="button" value="Eliminar" class="btn btn-danger">
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $('.fj-date').datepicker({
    format: "dd/mm/yyyy",
    autoclose: true
    });
    </script>

@endsection
