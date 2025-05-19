@extends('layouts.admin')
@section('title', 'Data Pendaftar')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Data Pendaftar</h2>

    <a href="{{ route('pendaftarans.create') }}" class="btn btn-success mb-3">+ Tambah Pendaftaran</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Lengkap</th>
                    <th>TTL</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telp</th>
                    <th>Jumlah Saudara</th>
                    <th>KK</th>
                    <th>NIK Siswa</th>
                    <th>NIK Ayah</th>
                    <th>NIK Ibu</th>
                    <th>Nama Ayah</th>
                    <th>Pekerjaan Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Pekerjaan Ibu</th>
                    <th>Alamat</th>
                    <th>Sekolah Asal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pendaftarans as $index => $pendaftaran)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $pendaftaran->nisn }}</td>
                        <td>{{ $pendaftaran->nama_lengkap }}</td>
                        <td>{{ $pendaftaran->tempat_tanggal_lahir }}</td>
                        <td>{{ $pendaftaran->jenis_kelamin }}</td>
                        <td>{{ $pendaftaran->no_telp_siswa }}</td>
                        <td>{{ $pendaftaran->jumlah_saudara }}</td>
                        <td>{{ $pendaftaran->no_kartu_keluarga }}</td>
                        <td>{{ $pendaftaran->nik_siswa }}</td>
                        <td>{{ $pendaftaran->nik_ayah }}</td>
                        <td>{{ $pendaftaran->nik_ibu }}</td>
                        <td>{{ $pendaftaran->nama_ayah }}</td>
                        <td>{{ $pendaftaran->pekerjaan_ayah }}</td>
                        <td>{{ $pendaftaran->nama_ibu }}</td>
                        <td>{{ $pendaftaran->pekerjaan_ibu }}</td>
                        <td>{{ $pendaftaran->alamat_lengkap }}</td>
                        <td>{{ $pendaftaran->sekolah_asal }}</td>
                        <td>
                            <a href="{{ route('pendaftarans.edit', $pendaftaran->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('pendaftarans.destroy', $pendaftaran->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="18" class="text-center">Belum ada data pendaftaran.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection