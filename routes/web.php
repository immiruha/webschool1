<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;


Route::get('/', [HomeController::class, 'index']);

Route::resource('beritas', BeritaController::class);
Route::resource('admin/berita', BeritaController::class);

Route::get('/news-detail', function () {
    return view('newsdetail');
});