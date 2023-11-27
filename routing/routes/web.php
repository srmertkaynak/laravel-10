<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::controller(TestController::class)->group(function () {
//     Route::get('admin/deneme', 'test')->name('test');
//     Route::get('admin/detail', 'detail')->name('detail');
// });

Route::prefix('admin')->group(function () {
    Route::get('/deneme', [TestController::class, 'test'])->name('test');
    Route::get('/detail', [TestController::class, 'detail'])->name('detail');
});
