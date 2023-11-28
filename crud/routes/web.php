<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Gruplama
Route::prefix('urunler')->group(function () {
    Route::get('/', [ProductController::class, 'list']);
    Route::get('/ekle', [ProductController::class, 'create']);
    Route::post('/ekle', [ProductController::class, 'store']);
    Route::get('/duzenle/{id}', [ProductController::class, 'edit']);
    Route::post('/duzenle/{id}', [ProductController::class, 'update']);
    Route::get('/sil/{id}', [ProductController::class, 'delete']);
});
