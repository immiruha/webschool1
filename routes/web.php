<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/tentang-kami', function () {
    return view('tentangkami');
})->name('tentang');

Route::resource('beritas', BeritaController::class);
Route::resource('admin/berita', BeritaController::class);

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.detail');