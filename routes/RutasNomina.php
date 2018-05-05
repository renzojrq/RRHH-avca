<?php 

Route::group(['prefix' => 'Nomina'], function() {
Route::get('/', 'NominaController@generarnomina');

});


 ?>