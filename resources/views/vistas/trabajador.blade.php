@extends('layouts.layout')
@section('titulo','Trabajador')
@section('contenido')
<div class="container-fluid mt-3">
    <div id="trabajador" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar Nuevo Trabajador</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="codigo">Codigo</label>
                            <input type="text" class="form-control" ng-model="empleado.codigo" id="codigo" name="codigo">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombres</label>
                            <input type="text" class="form-control" ng-model="empleado.nombre" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellidos</label>
                            <input type="text" class="form-control" ng-model="empleado.apellidos" id="apellido" name="apellido">
                        </div>
                        <div class="form-group">
                            <label for="dni">DNI</label>
                            <input type="text" id="dni" name="dni" ng-model="empleado.dni" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departamento">Seleccione Su Departamento</label>
                            <select id="departamento" name="departamento" class="form-control">
                                <option value="1">Tecnologia Digital</option>
                                <option value="1">Minas</option>
                                <option value="1">Pesada</option>
                                <option value="1">Electronica</option>
                            </select>
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <input type="button" value="Registrar" class="btn btn-primary" data-dismiss="modal">
                    <input type="button" value="Cancelar" class="btn btn-danger" data-dismiss="modal">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="container">
                <form action="" class="form-inline">
                    <label for="busqueda">Buscar </label>
                    <input type="text" ng-model="busqueda" class="form-control ml-3" id="busqueda" name="busqueda">
                    <input type="button" value="Buscar " class="btn btn-primary ml-3 mr-3">
                    <input type="button" value="Añadir Trabajador" class="btn btn-success ml-3 mr-3" data-toggle="modal" data-target="#trabajador">
                </form>
                <table class="table table-striped table-hover mt-2 table-sm">
                    <thead>
                        <th>Codigo</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>DNI</th>
                        <th>Departamento</th>
                    </thead>
                    <tbody>
                        <tr ng-repeat="empleado in empleados | filter : busqueda">
                            <td>empleado.codigo</td>
                            <td>empleado.nombre</td>
                            <td>empleado.apellidos</td>
                            <td>empleado.dni</td>
                            <td>empleado.departamento}}</td>
                            <td>
                                <input type="button" value="Editar" ng-click="verDetalle1(empleado.id)" class="btn btn-primary">
                            </td>
                            <td>
                                <input type="button" value="Eliminar" class="btn btn-danger">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
