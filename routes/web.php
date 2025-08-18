<?php

use App\Http\Controllers\ContabilidadController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RemuneracionesController;
use App\Http\Controllers\RentaController;
use App\Http\Middleware\VerificarSesionUsuario;
use Illuminate\Support\Facades\Route;

Route::get("/", [LoginController::class, "index"])->name("login.index");
Route::post("/", [LoginController::class, "store"])->name("login.store");
Route::post("/logout", [LoginController::class, "logout"])->name("logout");


Route::middleware([VerificarSesionUsuario::class])->group(function () {

    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
    Route::get("/contabilidad", [ContabilidadController::class, "index"])->name("contabilidad.index");
    Route::get("/remu", [RemuneracionesController::class, "index"])->name("remu.index");    
    Route::get("/renta", [RentaController::class, "index"])->name("renta.index");  
});

