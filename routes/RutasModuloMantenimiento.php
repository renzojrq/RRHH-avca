<?php 

Route::group(['prefix' => 'mantenimiento', 'middleware' => 'auth'], function() {
    Route::get('/', function () {
    	return view('admin.gerente.partials.ModuloMantenimiento.tabulador');
	})->name('admin.mantenimiento.tabulador');

	 Route::get('/conceptos', function () {
    	return view('admin.gerente.partials.ModuloMantenimiento.conceptos');
	})->name('admin.mantenimiento.conceptos');

	  Route::get('/variables', function () {
    	return view('admin.gerente.partials.ModuloMantenimiento.variables');
	})->name('admin.mantenimiento.variables');

	Route::get('/sucursales', function () {
    	return view('admin.gerente.partials.ModuloMantenimiento.sucursales');
	})->name('admin.mantenimiento.sucursales');

});


 ?>