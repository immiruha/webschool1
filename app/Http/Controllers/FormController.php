<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran; // Model sesuai nama tabel pendaftaran

class FormController extends Controller
{
    public function create()
    {
        return view('form'); // menampilkan form.blade.php
    }

    public function store(Request $request)
{
    $request->validate([
        'nisn' => 'required|string',
        'nama_lengkap' => 'required|string',
        'tempat_tanggal_lahir' => 'required|string',
        'jenis_kelamin' => 'required|string',
        'no_telp_siswa' => 'required|string',
        'jumlah_saudara' => 'required|integer',
        'no_kartu_keluarga' => 'required|string',
        'nik_siswa' => 'required|string',
        'nik_ayah' => 'required|string',
        'nik_ibu' => 'required|string',
        'nama_ayah' => 'required|string',
        'nama_ibu' => 'required|string',
        'pekerjaan_ayah' => 'required|string',
        'pekerjaan_ibu' => 'required|string',
        'alamat_lengkap' => 'required|string',
        'sekolah_asal' => 'required|string',
    ]);

    Pendaftaran::create($request->all());

    return redirect()->route('pendaftaran.create')->with('success', 'Data berhasil disimpan!');
}
}