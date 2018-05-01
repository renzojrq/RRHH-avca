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
    return view('rrhh');
})->middleware('guest');

/*Route::get('rrhh', function () {
    return view('rrhh');
});*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('dashboard', function() {
        return view('admin.gerente.dashboard', $data = [], $mergeData = []);
    })->name('gerente.dashboard');
    Route::get('obtener-profesiones', 'EmpleadoController@obtenerProfesiones');
    Route::get('obtener-sucursales', 'EmpleadoController@obtenerSucursales');
    Route::get('obtener-departamentos', 'EmpleadoController@obtenerDepartamentos');
    Route::get('obtener-cargos', 'EmpleadoController@obtenerCargos');
    Route::get('obtener-profesiones/{nivel_academico}', 'EmpleadoController@obtenerProfesiones');
    Route::get('obtener-bancos', 'EmpleadoController@obtenerBancos');
    Route::get('obtener-estados', 'EmpleadoController@obtenerEstados');
    Route::get('obtener-tabulador', 'EmpleadoController@obtenerTabuladorSalarial');

    require "RutasModuloMantenimiento.php";
     require "RutasModuloCaptacion.php";
     require "RutasEmpleado.php";
     require "Rutasreclutamiento.php";
     require "RutasExpediente.php";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

