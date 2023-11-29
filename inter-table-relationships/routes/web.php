<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phones', [PhoneController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
