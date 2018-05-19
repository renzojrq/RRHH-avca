<?php 

Route::group(['prefix' => 'asistencia', 'middleware' => 'auth'], function() {
   
    Route::get('/', function () {
    	return view('admin.gerente.partials.asistencia.carga-asistencia');
    })->name('admin.gerente.partials.asistencia.carga-asistencia');
    
    



});



 ?>