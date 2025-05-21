<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;

Route::get('/', [HomeController::class, 'index']);

// Resource controller untuk pendaftarans (CRUD otomatis dengan URL /pendaftarans)
Route::resource('pendaftarans', PendaftaranController::class);

// Resource controller untuk berita dan admin (sesuaikan kalau perlu)
Route::resource('beritas', BeritaController::class);
Route::resource('admin/berita', BeritaController::class);