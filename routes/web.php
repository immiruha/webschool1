<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;

Route::get('/home', [HomeController::class, 'index']);

// Resource controller untuk pendaftarans (CRUD otomatis dengan URL /pendaftarans)
Route::resource('pendaftarans', PendaftaranController::class);

// Resource controller untuk berita dan admin (sesuaikan kalau perlu)
Route::resource('beritas', BeritaController::class);
Route::resource('admin/berita', BeritaController::class);

// Form pendaftaran yang terpisah (form create dan store)
// Menampilkan form pendaftaran (GET)
Route::get('/pendaftaran', [FormController::class, 'create'])->name('pendaftarans.create');
// Proses submit form pendaftaran (POST)
Route::post('/pendaftaran', [FormController::class, 'store'])->name('pendaftarans.store');
