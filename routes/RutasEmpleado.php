<?php 

Route::group(['prefix' => 'empleado', 'middleware' => 'auth'], function() {
   
    Route::get('/', function () {
    	return view('admin.gerente.partials.empleado.empleado-nomina');
    })->name('admin.gerente.partials.empleado.empleado-nomina');
    
    Route::get('/constancias', function () {
    	return view('admin.gerente.partials.empleado.empleado-constancias');
    })->name('admin.gerente.partials.empleado.empleado-constancias');
    
    Route::get('/cargafamiliar', function () {
    	return view('admin.gerente.partials.empleado.empleado-cargafamiliar');
    })->name('admin.gerente.partials.empleado.empleado-cargafamiliar');
    
    Route::get('/actualizarperfil', function () {
    	return view('admin.gerente.partials.empleado.empleado-actualizarperfil');
	})->name('admin.gerente.partials.empleado.empleado-actualizarperfil');


});



 ?>