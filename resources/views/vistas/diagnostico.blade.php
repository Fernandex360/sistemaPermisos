@extends('layouts.layout')
@section('titulo','Diagnostico')
@section('contenido')
<div class="container">
    <div id="diagnostico" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar Nuevo Diagnostico</h4>
                </div>
                <form action="" method="post">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="nombre">Nombre </label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion </label>
                            <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <input type="button" value="Registrar" class="btn btn-primary" data-dismiss="modal" >
                        <input type="button" value="Cancelar" class="btn btn-danger" data-dismiss="modal">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-3">
            <div>
                
                <form action="" class="form-inline">
                    <label for="busqueda">Buscar </label>
                    <input type="text" ng-model="busqueda" class="form-control ml-3" id="busqueda" name="busqueda">
                    <input type="button" value="Buscar " class="btn btn-primary ml-3 mr-3">
                    <input type="button" value="Añadir Diagnostico" class="btn btn-success"data-toggle="modal" data-target="#diagnostico" >
                </form>
            </div>
            <div class="container mt-3">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Gripe</td>
                            <td>Lorem ipsum dolor sit amet  iste quaerat? </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
