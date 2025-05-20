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
            
            <form>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">NISN:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">NIK Ayah:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Nama Lengkap:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">NIK Ibu:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Tempat dan Tanggal Lahir:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nama Ayah Kandung:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Alamat Lengkap:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nama Ibu Kandung:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Jenis Kelamin:</label>
                        <select class="form-select">
                            <option value="">Select Option</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pekerjaan Ayah:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Nomor HP Calon Siswa/i (Jika ada):</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pekerjaan Ibu:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Jumlah Saudara:</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pendidikan Ayah:</label>
                        <select class="form-select">
                            <option value="">Select Option</option>
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sma">SMA/SMK</option>
                            <option value="d3">D3</option>
                            <option value="s1">S1</option>
                            <option value="s2">S2</option>
                            <option value="s3">S3</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">No. Kartu Keluarga:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pendidikan Ibu:</label>
                        <select class="form-select">
                            <option value="">Select Option</option>
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sma">SMA/SMK</option>
                            <option value="d3">D3</option>
                            <option value="s1">S1</option>
                            <option value="s2">S2</option>
                            <option value="s3">S3</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">NIK Siswa:</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nama TK/RA Asal:</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                
                <div class="btn-container">
                    <button type="button" class="btn btn-back">Kembali</button>
                    <button type="submit" class="btn btn-submit">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>