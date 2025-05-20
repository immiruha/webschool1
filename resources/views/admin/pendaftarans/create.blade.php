@extends('layouts.admin')

@section('content')
    <h1>Tambah Data Pendaftaran</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pendaftaran.store') }}" method="POST">
        @csrf

        <div>
            <label for="nisn">NISN:</label><br>
            <input type="text" name="nisn" id="nisn" value="{{ old('nisn') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label for="nama_lengkap">Nama Lengkap:</label><br>
            <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ old('nama_lengkap') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label for="tempat_tanggal_lahir">Tempat, Tanggal Lahir:</label><br>
            <input type="datetime-local" name="tempat_tanggal_lahir" id="tempat_tanggal_lahir" value="{{ old('tempat_tanggal_lahir') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label for="alamat_lengkap">Alamat Lengkap:</label><br>
            <textarea name="alamat_lengkap" id="alamat_lengkap" rows="3" required>{{ old('alamat_lengkap') }}</textarea>
        </div>

        <div style="margin-top:10px;">
            <label for="jenis_kelamin">Jenis Kelamin:</label><br>
            <select name="jenis_kelamin" id="jenis_kelamin" required>
                <option value="">-- Pilih --</option>
                <option value="Laki - laki" {{ old('jenis_kelamin') == 'Laki - laki' ? 'selected' : '' }}>Laki - laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div style="margin-top:10px;">
            <label for="no_telp_siswa">No. Telepon Siswa:</label><br>
            <input type="text" name="no_telp_siswa" id="no_telp_siswa" value="{{ old('no_telp_siswa') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label for="jumlah_saudara">Jumlah Saudara:</label><br>
            <input type="number" name="jumlah_saudara" id="jumlah_saudara" value="{{ old('jumlah_saudara') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label for="no_kartu_keluarga">No. Kartu Keluarga:</label><br>
            <input type="text" name="no_kartu_keluarga" id="no_kartu_keluarga" value="{{ old('no_kartu_keluarga') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label for="nik_siswa">NIK Siswa:</label><br>
            <input type="text" name="nik_siswa" id="nik_siswa" value="{{ old('nik_siswa') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label for="nik_ayah">NIK Ayah:</label><br>
            <input type="text" name="nik_ayah" id="nik_ayah" value="{{ old('nik_ayah') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label for="nik_ibu">NIK Ibu:</label><br>
            <input type="text" name="nik_ibu" id="nik_ibu" value="{{ old('nik_ibu') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label for="nama_ayah">Nama Ayah:</label><br>
            <input type="text" name="nama_ayah" id="nama_ayah" value="{{ old('nama_ayah') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label for="nama_ibu">Nama Ibu:</label><br>
            <input type="text" name="nama_ibu" id="nama_ibu" value="{{ old('nama_ibu') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label for="pekerjaan_ayah">Pekerjaan Ayah:</label><br>
            <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label for="pekerjaan_ibu">Pekerjaan Ibu:</label><br>
            <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}" required>
        </div>

        <div style="margin-top:10px;">
            <label for="sekolah_asal">Sekolah Asal:</label><br>
            <input type="text" name="sekolah_asal" id="sekolah_asal" value="{{ old('sekolah_asal') }}" required>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit">Simpan</button>
            <a href="{{ route('pendaftaran.index') }}">Batal</a>
        </div>
    </form>
@endsection