<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'pendaftarans'; // Nama tabel harus sama dengan migration kamu
    protected $fillable = [
        'nisn',
        'nama_lengkap',
        'tempat_tanggal_lahir',
        'jenis_kelamin',
        'no_telp_siswa',
        'jumlah_saudara',
        'no_kartu_keluarga',
        'nik_siswa',
        'nik_ayah',
        'nik_ibu',
        'nama_ayah',
        'nama_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'alamat_lengkap',
        'sekolah_asal',
    ];
}