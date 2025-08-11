<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/samito', function () {
    return view('samito');
});


Route::get('/pruebas', function () {
    return view("manteClientes.index");
});

Route::get('/pruebas2', function () {
    return view('prueba');
});