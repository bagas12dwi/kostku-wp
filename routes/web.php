<?php

use App\Http\Controllers\HasilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/temukan', function () {
    return view('temukan', [
        'tittle' => 'temukan'
    ]);
});

Route::post('/hasil', [HasilController::class, 'add'])->name('getHasil');
Route::get('/hasil', [HasilController::class, 'index']);

Route::get('/produk', [ProductController::class, 'index']);
