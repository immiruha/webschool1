@extends('layouts.admin')
@section('title', 'Daftar Berita')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Daftar Berita</h2>

    <a href="{{ route('berita.create') }}" class="btn btn-success mb-3">+ Tambah Berita Baru</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($beritas as $index => $berita)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td style="width: 100px; text-align: center;">
                            @if($berita->gambar)
                                <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="Gambar Berita" style="max-width: 80px; max-height: 60px; object-fit: cover; border-radius: 4px;">
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>
                        <td>{{ $berita->judul }}</td>
                        <td>{{ Str::limit($berita->isi, 100) }}</td>
                        <td>
                            <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus berita ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada berita.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection