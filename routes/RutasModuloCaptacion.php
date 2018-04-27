<?php 

Route::group(['prefix' => 'captacion', 'middleware' => 'auth'], function() {
    Route::get('/', function () {
    	return view('admin.gerente.partials.captacion.seleccion.aspirantes-registrados');
	})->name('admin.gerente.partials.captacion.seleccion.aspirantes-registrados');

 Route::get('/convocados', function () {
    	return view('admin.gerente.partials.captacion.seleccion.aspirantes-convocados');
	})->name('admin.gerente.partials.captacion.seleccion.aspirantes-convocados');
	
 Route::get('/entrevistados', function () {
    	return view('admin.gerente.partials.captacion.seleccion.aspirantes-entrevistados');
	})->name('admin.gerente.partials.captacion.seleccion.aspirantes-entrevistados');

 Route::get('/seleccionables', function () {
    	return view('admin.gerente.partials.captacion.seleccion.aspirantes-seleccionables');
	})->name('admin.gerente.partials.captacion.seleccion.aspirantes-seleccionables');

 Route::get('/verificados', function () {
    	return view('admin.gerente.partials.captacion.seleccion.aspirantes-verificados');
	})->name('admin.gerente.partials.captacion.seleccion.aspirantes-verificados');
});


 ?>