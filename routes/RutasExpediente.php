<?php 

Route::group(['prefix' => 'expediente', 'middleware' => 'auth'], function() {
    Route::get('/', function () {
    	return view('admin.gerente.partials.expediente.reconocimiento');
	})->name('admin.gerente.partials.expediente.reconocimiento');

 Route::get('/accidentes', function () {
    	return view('admin.gerente.partials.expediente.accidentes');
	})->name('admin.gerente.partials.expediente.accidentes');
	
 Route::get('/amonestacion', function () {
    	return view('admin.gerente.partials.expediente.amonestacion');
	})->name('admin.gerente.partials.expediente.amonestacion');

 Route::get('/cursos', function () {
    	return view('admin.gerente.partials.expediente.cursos');
	})->name('admin.gerente.partials.expediente.cursos');

 Route::get('/reposos', function () {
    	return view('admin.gerente.partials.expediente.reposos');
	})->name('admin.gerente.partials.expediente.reposos');
});


 ?>