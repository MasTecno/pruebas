<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get("/", [LoginController::class, "index"])->name("login.index");

Route::get('/samito', function () {
    return view('samito');
});


Route::get('/pruebas', function () {
    return view("manteClientes.index");
});

Route::get('/pruebas2', function () {
    return view('prueba');
});