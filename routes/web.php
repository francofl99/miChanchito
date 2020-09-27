<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlujoController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/IngresoDeDinero', 'App\Http\Controllers\FlujoController@IngresoDeDinero')->name("ingresoDeDinero");
