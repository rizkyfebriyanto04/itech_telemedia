<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/saldo', [HomeController::class, 'saldo'])->name('saldo');

Route::get('/back-office', [AuthController::class, 'index'])->name('login');
Route::post('/aksi-login', [AuthController::class, 'loginaksi'])->name('login.post');

Route::middleware('backoffice')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
