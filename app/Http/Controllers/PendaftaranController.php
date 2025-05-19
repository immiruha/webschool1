<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    // Tampilkan semua data
    public function index()
    {
        $pendaftarans = Pendaftaran::all();
        return view('admin.pendaftarans.index', compact('pendaftarans'));
    }

    // Tampilkan form tambah
    public function create()
    {
        return view('admin.pendaftarans.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'nama_lengkap' => 'required',
            'tempat_tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp_siswa' => 'required',
            'jumlah_saudara' => 'required',
            'no_kartu_keluarga' => 'required',
            'nik_siswa' => 'required',
            'nik_ayah' => 'required',
            'nik_ibu' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'alamat_lengkap' => 'required',
            'sekolah_asal' => 'required',
        ]);

        Pendaftaran::create($request->all());

        return redirect()->route('pendaftarans.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Tampilkan form edit
    public function edit($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('admin.pendaftarans.edit', compact('pendaftaran'));
    }

    // Proses update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nisn' => 'required',
            'nama_lengkap' => 'required',
            'tempat_tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp_siswa' => 'required',
            'jumlah_saudara' => 'required',
            'no_kartu_keluarga' => 'required',
            'nik_siswa' => 'required',
            'nik_ayah' => 'required',
            'nik_ibu' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'alamat_lengkap' => 'required',
            'sekolah_asal' => 'required',
        ]);

        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->update($request->all());

        return redirect()->route('pendaftarans.index')->with('success', 'Data berhasil diperbarui');
    }

    // Hapus data
    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $pendaftaran->delete();

        return redirect()->route('pendaftarans.index')->with('success', 'Data berhasil dihapus');
    }
}