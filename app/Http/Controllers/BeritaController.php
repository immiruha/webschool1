<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'kategori' => 'required|in:prestasi,kegiatan,ekstrakulikuler',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('judul', 'isi', 'kategori');
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $filename = Str::slug($request->judul) . '-' . time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/berita', $filename);
            $data['gambar'] = $filename;
        }

        Berita::create($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'kategori' => 'required|in:prestasi,kegiatan,ekstrakulikuler',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('judul', 'isi', 'kategori');

        // Jika ada gambar baru, upload dan hapus gambar lama
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($berita->gambar && Storage::exists('public/berita/' . $berita->gambar)) {
                Storage::delete('public/berita/' . $berita->gambar);
            }

            $gambar = $request->file('gambar');
            $filename = Str::slug($request->judul) . '-' . time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->storeAs('public/berita', $filename);
            $data['gambar'] = $filename;
        }

        $berita->update($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $berita)
    {
        // Hapus gambar jika ada
        if ($berita->gambar && Storage::exists('public/berita/' . $berita->gambar)) {
            Storage::delete('public/berita/' . $berita->gambar);
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}