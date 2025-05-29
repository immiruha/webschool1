<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/tentang-kami', function () {
    return view('tentangkami');
})->name('tentang');

Route::get('/hubungi-kami', function () {
    return view('hubungikami'); 
})->name('hubungi');

Route::resource('admin/berita', BeritaController::class)->parameters([
    'berita' => 'berita'
]);

Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');