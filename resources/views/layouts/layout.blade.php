<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker3.min.css">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <title>@yield('titulo')</title>
</head>
<body ng-app="permisos">
    <div class="container-fluid">
        <div class="row">
            <div class="barra-lateral col-12 col-sm-auto">
                <div class="logo">
                   <img src="img/img1.png" alt="" width="320">
                </div>
            <nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
                <a href="/"><i class="icon-calendar-plus-o"></i><span>Pricipal</span></a>
                <a href="/trabajador"><i class="icon-user-plus"></i><span>Nuevo Empleado</span></a>
                <a href="/permiso"><i class="icon-stethoscope"></i><span>Registrar Permiso</span></a>
                <a href="/diagnostico"><i class="icon-heartbeat"></i><span>Resgistrar Diagnostico</span></a>
                <a href="/centro"><i class="icon-medkit"></i><span>Registrar Centros de Atencion</span></a>
                <a href="/reporte"><i class=" icon-chart-bar"></i><span>Reporte</span></a>
                <a href="/configuracion"><i class="icon-cog"></i><span>Configuracion</span></a>
                <a href="/salir"><i class="icon-login"></i><span>Salir</span></a>
            </nav>
            </div>
            <main class="main col" ng-view>
                @yield('contenido')
            </main>
        </div>
    </div>
</body>
</html>