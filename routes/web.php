<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlujoController;

Route::get('/{any?}', function () {
    return view('welcome');
});

Route::post('/IngresoDeDinero', 'App\Http\Controllers\FlujoController@IngresoDeDinero')->name("ingresoDeDinero");
Route::post('/EgresoDeDinero', 'App\Http\Controllers\FlujoController@EgresoDeDinero')->name("egresoDeDinero");

