<?php 

Route::group(['prefix' => 'empleadovistas', 'middleware' => 'auth'], function() {
   
    Route::get('/', function () {
    	return view('admin.gerente.partials.empleadovistas.empleado-nomina2');
    })->name('admin.gerente.partials.empleadovistas.empleado-nomina2');
    
    Route::get('/consulta', 'EmpleadoController@consultavoucher')->name('consulta.voucher');

    Route::get('/constancias', function () {
    	return view('admin.gerente.partials.empleadovistas.empleado-constancias2');
    })->name('admin.gerente.partials.empleadovistas.empleado-constancias2');
    
    Route::get('/cargafamiliar', function () {
    	return view('admin.gerente.partials.empleadovistas.empleado-cargafamiliar2');
    })->name('admin.gerente.partials.empleadovistas.empleado-cargafamiliar2');
    
    Route::get('/actualizarperfil', function () {
    	return view('admin.gerente.partials.empleadovistas.empleado-actualizarperfil2');
	})->name('admin.gerente.partials.empleadovistas.empleado-actualizarperfil2');

    Route::get('/cargaoficio', function () {
    	return view('admin.gerente.partials.empleadovistas.empleado-oficio2');
	})->name('admin.gerente.partials.empleadovistas.empleado-oficio2');




});



 ?>