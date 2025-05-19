<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pendaftarans', PendaftaranController::class);
Route::resource('admin/pendaftaran', PendaftaranController::class);
Route::resource('beritas', BeritaController::class);
Route::resource('admin/berita', BeritaController::class);