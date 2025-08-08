<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pruebas', function () {
    return view('prueba');
});

Route::get('/pruebas2', function () {
    return view('prueba');
});