<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/theme1', function () {
    return view('theme1.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/home', [HomeController::class, 'store']);
Route::get('/indextest', [TestController::class, 'index']);
Route::post('/testwa', [TestController::class, 'sendwa']);
