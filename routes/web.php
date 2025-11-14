<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('products')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/create', 'create');
    Route::get('/{id}/{category?}', 'show');
});



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/,', [HomeController::class, 'index'])->name('welcome');
