<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // Nama tabel jika tidak mengikuti konvensi jamak
    protected $table = 'beritas';

    // Field yang bisa diisi secara massal
    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'kategori',
    ];
}