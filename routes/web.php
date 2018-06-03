<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('vistas.permiso');
});
Route::get('/permiso', function () {
    return view('vistas.permiso');
});
Route::get('/trabajador', function () {
    return view('vistas.trabajador');
});

Route::get('/centro', function () {
    return view('vistas.centro');
});

Route::get('/diagnostico', function () {
    return view('vistas.diagnostico');
});


