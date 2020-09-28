<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlujoController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/bringAllIncome", "App\Http\Controllers\FlujoController@bringAllIncome")->name("bringAllIncome");
Route::get("/bringAllEpanses", "App\Http\Controllers\FlujoController@bringAllEpanses")->name("bringAllEpanses");
