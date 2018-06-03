@extends('layouts.layout')
@section('titulo','Reporte')
@section('contenido')
<div class="row mt-3">
    <div class="columna col-lg-12">
        <form action="" class="form-inline">
            <label for="busqueda">Buscar </label>
            <input type="text" class="form-control ml-3" id="busqueda" name="busqueda">
            <input type="button" value="Buscar " class="btn btn-primary ml-3 mr-3">
            <label for="departamento">Filtrar</label>
            <select id="departamento" name="departamento" class="form-control ml-3">
                <option value="1">Tecnologia Digital</option>
                <option value="1">Minas</option>
                <option value="1">Pesada</option>
                <option value="1">Electronica</option>
            </select>
        </form>
        <table class="table table-striped table mt-3">
            <thead>
                <th>Codigo</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Descanso Medico</th>
                <th>Dias en Subcidio</th>
                <th>Monto de Subcidio</th>
                <th>Estado del Subcidio</th>
            </thead>
            <tbody>
                <tr ng-repeat="empleado in empleados">
                    <td>{{empleado.codigo}}</td>
                    <td>{{empleado.nombre}}</td>
                    <td>{{empleado.apellidos}}</td>
                    <td>{{empleado.dni}}</td>
                    <td>{{empleado.departamento}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection