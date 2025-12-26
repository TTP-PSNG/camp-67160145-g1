<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function () {
    return view('template.default');
});

Route::get('/index' , [App\Http\Controllers\MyController::class, 'index']);
Route::get('/calculate' , [App\Http\Controllers\MyController::class, 'info']);
Route::post('/calculate' , [App\Http\Controllers\MyController::class, 'calculate']);
Route::post('/submit' , [App\Http\Controllers\MyController::class, 'store']);

Route::resource('/flights', App\Http\Controllers\FlightController::class);
