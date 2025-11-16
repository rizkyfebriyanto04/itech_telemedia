<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;


Route::middleware('recaptcha.front')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/saldo', [HomeController::class, 'saldo'])->name('saldo');
    Route::get('/get-url', [HomeController::class, 'getURL'])->name('get-url');
    Route::get('/blog/{slug}', [HomeController::class, 'GetDetailArtikel'])->name('get-detail-blog');
});


Route::get('/back-office', [AuthController::class, 'index'])->name('login');
Route::post('/aksi-login', [AuthController::class, 'loginaksi'])->name('login.post');

Route::middleware('backoffice')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Setting
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');
    Route::put('/setting/update', [SettingController::class, 'update'])->name('setting.update');

    // Berita
    Route::get('/artikel', [SettingController::class, 'artikel'])->name('artikel');
    Route::get('/add-artikel', [SettingController::class, 'tambah_artikel'])->name('add.artikel');
    Route::post('/store-tambah', [SettingController::class, 'store_artikel'])->name('artikel.tambahdata');
    Route::get('/artikel/{id}/edit', [SettingController::class, 'artikel_edit'])->name('artikel.edit');
    Route::put('/artikel/{id}', [SettingController::class, 'artikel_update'])->name('artikel.update');
    Route::delete('/artikel/{id}', [SettingController::class, 'artikel_delete'])->name('artikel.delete');

    Route::get('/testimoni', [SettingController::class, 'testimoni'])->name('testimoni');
    Route::get('/add-testimoni', [SettingController::class, 'tambah_testimoni'])->name('add.testimoni');
    Route::post('/store', [SettingController::class, 'store_testimoni'])->name('testimoni.store');
    Route::get('/testimoni/{id}/edit', [SettingController::class, 'testimoni_edit'])->name('testimoni.edit');
    Route::put('/testimoni/{id}', [SettingController::class, 'testimoni_update'])->name('testimoni.update');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});
