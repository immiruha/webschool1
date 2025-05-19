@extends('layouts.admin')
@section('title', 'Edit Berita')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Edit Berita</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $berita->judul) }}" required>
        </div>

        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea name="isi" id="isi" rows="6" class="form-control" required>{{ old('isi', $berita->isi) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Ganti Gambar (Opsional)</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>

        @if ($berita->gambar)
            <div class="mb-3">
                <p>Gambar saat ini:</p>
                <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="Gambar Berita" style="max-height: 200px;">
            </div>
        @endif

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection