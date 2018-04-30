<?php 

Route::group(['prefix' => 'reclutamiento', 'middleware' => 'auth'], function() {
    Route::get('/', function () {
    	return view('admin.gerente.partials.captacion.reclutamiento.consulta-interno');
	})->name('admin.gerente.partials.captacion.reclutamiento.consulta-interno');



});


 ?>