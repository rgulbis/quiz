<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/login', [AuthController::class, 'index'])->name("login")->middleware("guest");

Route::get('/', [HomeController::class, 'index'])->middleware("auth");
Route::get('/menu', [HomeController::class, 'index'])->middleware("auth");

