<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;
use App\Http\Controllers\UserController;


// todo list routes
Route::resource('/todo',todosController::class);

// login and register routes
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [UserController::class, 'login'])->name('login');