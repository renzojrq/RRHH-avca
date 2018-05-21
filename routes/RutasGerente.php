<?php 

Route::group(['prefix' => 'gerentevistas', 'middleware' => 'auth'], function() {
   
    Route::get('/', function () {
    	return view('admin.gerente.partials.gerentevistas.gerente1');
    })->name('admin.gerente.partials.gerentevistas.gerente1');
    
    Route::get('/gerente2', function () {
    	return view('admin.gerente.partials.gerentevistas.gerente2');
    })->name('admin.gerente.partials.gerentevistas.gerente2');
    
    Route::get('/gerente3', function () {
    	return view('admin.gerente.partials.gerentevistas.gerente3');
    })->name('admin.gerente.partials.gerentevistas.gerente3');
    
    Route::get('/gerente4', function () {
    	return view('admin.gerente.partials.gerentevistas.gerente4');
	})->name('admin.gerente.partials.gerentevistas.gerente4');

    Route::get('/gerente5', function () {
    	return view('admin.gerente.partials.gerentevistas.gerente5');
	})->name('admin.gerente.partials.gerentevistas.gerente5');




});



 ?>