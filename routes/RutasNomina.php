<?php 

Route::group(['prefix' => 'Nomina'], function() {

	Route::get('/consultar', function () {
    	return view('admin.gerente.partials.nomina.consultarnomina');
	})->name('admin.gerente.partials.nomina.consultarnomina');

		Route::get('/generar', function () {
    	return view('admin.gerente.partials.nomina.generar');
	})->name('admin.gerente.partials.nomina.generar');


Route::get('/generarprueba', 'NominaController@generarnomina');

});


 ?>