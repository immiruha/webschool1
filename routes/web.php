<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;

Route::get('/', [HomeController::class, 'index']);
// Resource controller untuk berita dan admin (sesuaikan kalau perlu)
Route::resource('beritas', BeritaController::class);
Route::resource('admin/berita', BeritaController::class);

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.detail');