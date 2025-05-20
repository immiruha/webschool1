@extends('layouts.admin')

@section('title', 'Edit Pendaftaran')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Data Pendaftaran</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Ada beberapa masalah dengan input kamu.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pendaftarans.update', $pendaftaran->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" name="nisn" class="form-control" value="{{ $pendaftaran->nisn }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" value="{{ $pendaftaran->nama_lengkap }}" required>
        </div>

        <div class="mb-3">
            <label for="tempat_tanggal_lahir" class="form-label">Tempat & Tanggal Lahir</label>
            <input type="datetime-local" name="tempat_tanggal_lahir" class="form-control" value="{{ \Carbon\Carbon::parse($pendaftaran->tempat_tanggal_lahir)->format('Y-m-d\TH:i') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat Lengkap</label>
            <textarea name="alamat_lengkap" class="form-control" rows="3" required>{{ $pendaftaran->alamat_lengkap }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label><br>
            <select name="jenis_kelamin" class="form-select" required>
                <option value="Laki - laki" {{ $pendaftaran->jenis_kelamin == 'Laki - laki' ? 'selected' : '' }}>Laki - laki</option>
                <option value="Perempuan" {{ $pendaftaran->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">No. Telp Siswa</label>
            <input type="text" name="no_telp_siswa" class="form-control" value="{{ $pendaftaran->no_telp_siswa }}" required>
        </div>

        <div class="mb-3">
             <label class="form-label">No. Kartu Keluarga</label>
            <input type="text" name="no_kartu_keluarga" class="form-control" value="{{ $pendaftaran->no_kartu_keluarga }}" required>
        </div>

        <div class="mb-3">
             <label class="form-label">Jumlah Saudara</label>
            <input type="text" name="jumlah_saudara" class="form-control" value="{{ $pendaftaran->jumlah_saudara }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIK Siswa</label>
            <input type="text" name="nik_siswa" class="form-control" value="{{ $pendaftaran->nik_siswa }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIK Ayah</label>
            <input type="text" name="nik_ayah" class="form-control" value="{{ $pendaftaran->nik_ayah }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIK Ibu</label>
            <input type="text" name="nik_ibu" class="form-control" value="{{ $pendaftaran->nik_ibu }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Ayah</label>
            <input type="text" name="nama_ayah" class="form-control" value="{{ $pendaftaran->nama_ayah }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Ibu</label>
            <input type="text" name="nama_ibu" class="form-control" value="{{ $pendaftaran->nama_ibu }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Pekerjaan Ayah</label>
            <input type="text" name="pekerjaan_ayah" class="form-control" value="{{ $pendaftaran->pekerjaan_ayah }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Pekerjaan Ibu</label>
            <input type="text" name="pekerjaan_ibu" class="form-control" value="{{ $pendaftaran->pekerjaan_ibu }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Pekerjaan Ibu</label>
            <input type="text" name="pekerjaan_ibu" class="form-control" value="{{ $pendaftaran->pekerjaan_ibu }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Sekolah Asal</label>
            <input type="text" name="sekolah_asal" class="form-control" value="{{ $pendaftaran->sekolah_asal }}" required>
        </div>


        <button type="submit" class="btn btn-primary">Update Data</button>
        <a href="{{ route('pendaftarans.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection