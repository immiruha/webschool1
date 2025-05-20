<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #7BC47F;
            padding: 20px;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .header {
            display: flex;
            justify-content: flex-end;
            color: white;
            padding-bottom: 15px;
        }
        
        .header-item {
            margin-left: 20px;
            display: flex;
            align-items: center;
        }
        
        .header-item i {
            margin-right: 5px;
        }
        
        .form-container {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .title-section {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .logo {
            width: 60px;
            height: 60px;
            margin-right: 15px;
        }
        
        .title {
            font-size: 22px;
            font-weight: bold;
        }
        
        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
            justify-content: space-between;
        }
        
        .form-group {
            width: 48%;
            margin-bottom: 15px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 14px;
        }
        
        .form-control {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #ECECEC;
        }
        
        .form-select {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #ECECEC;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 15px;
            padding-right: 30px;
            color: #666;
        }
        
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            min-width: 180px;
            text-align: center;
        }
        
        .btn-back {
            background-color: #FFD696;
            color: #333;
        }
        
        .btn-submit {
            background-color: #FF9900;
            color: white;
        }

        @media (max-width: 768px) {
            .form-group {
                width: 100%;
            }
            
            .btn-container {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-item">
                <i>📞</i> +62 811 234 4578
            </div>
            <div class="header-item">
                <i>✉️</i> iniemailsekolah@gmail.com
            </div>
        </div>

        <div class="form-container">
            <div class="title-section">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNNTAgMTBMOTAgNTBMNTAgOTBMMTAgNTBMNTAgMTBaIiBmaWxsPSIjMDA4ODU1IiBzdHJva2U9IiNGRkMxMDAiIHN0cm9rZS13aWR0aD0iMy41Ii8+PGNpcmNsZSBjeD0iNTAiIGN5PSI1MCIgcj0iMjAiIGZpbGw9IiMwMDg4NTUiIHN0cm9rZT0iI0ZGQzEwMCIgc3Ryb2tlLXdpZHRoPSIzIi8+PGNpcmNsZSBjeD0iNTAiIGN5PSI1MCIgcj0iMTAiIGZpbGw9IiNGRkMxMDAiLz48L3N2Zz4=" alt="Logo Sekolah" class="logo">
                <h1 class="title">DATA CALON SISWA/I</h1>
            </div>

            <form method="POST" action="{{ route('pendaftarans.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">NISN:</label>
                        <input type="text" class="form-control" name="nisn" value="{{ old('nisn') }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">NIK Ayah:</label>
                        <input type="text" class="form-control" name="nik_ayah" value="{{ old('nik_ayah') }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Nama Lengkap:</label>
                        <input type="text" class="form-control" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">NIK Ibu:</label>
                        <input type="text" class="form-control" name="nik_ibu" value="{{ old('nik_ibu') }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Tempat dan Tanggal Lahir:</label>
                        <input type="text" class="form-control" name="tempat_tanggal_lahir" value="{{ old('tempat_tanggal_lahir') }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nama Ayah Kandung:</label>
                        <input type="text" class="form-control" name="nama_ayah" value="{{ old('nama_ayah') }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Alamat Lengkap:</label>
                        <input type="text" class="form-control" name="alamat_lengkap" value="{{ old('alamat_lengkap') }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nama Ibu Kandung:</label>
                        <input type="text" class="form-control" name="nama_ibu" value="{{ old('nama_ibu') }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Jenis Kelamin:</label>
                        <select class="form-select" name="jenis_kelamin" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki - laki" {{ old('jenis_kelamin') == 'Laki - laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pekerjaan Ayah:</label>
                        <input type="text" class="form-control" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Nomor HP Calon Siswa/i (Jika ada):</label>
                        <input type="text" class="form-control" name="no_telp_siswa" value="{{ old('no_telp_siswa') }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pekerjaan Ibu:</label>
                        <input type="text" class="form-control" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Jumlah Saudara:</label>
                        <input type="number" class="form-control" name="jumlah_saudara" value="{{ old('jumlah_saudara') }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pendidikan Ayah:</label>
                        <select class="form-select" name="pendidikan_ayah" required>
                            <option value="">Pilih Pendidikan</option>
                            @foreach(['sd','smp','sma','d3','s1','s2','s3'] as $pendidikan)
                                <option value="{{ $pendidikan }}" {{ old('pendidikan_ayah') == $pendidikan ? 'selected' : '' }}>{{ strtoupper($pendidikan) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">No. Kartu Keluarga:</label>
                        <input type="text" class="form-control" name="no_kartu_keluarga" value="{{ old('no_kartu_keluarga') }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pendidikan Ibu:</label>
                        <select class="form-select" name="pendidikan_ibu" required>
                            <option value="">Pilih Pendidikan</option>
                            @foreach(['sd','smp','sma','d3','s1','s2','s3'] as $pendidikan)
                                <option value="{{ $pendidikan }}" {{ old('pendidikan_ibu') == $pendidikan ? 'selected' : '' }}>{{ strtoupper($pendidikan) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="btn-container">
                    <a href="/" class="btn btn-back">Kembali</a>
                    <button type="submit" class="btn btn-submit">Daftar</button>
                </div>
                @if(session('success'))
                <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
                    {{ session('success') }}
                </div>
            @endif
            </form>
        </div>
    </div>
</body>
</html>