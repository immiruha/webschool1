@extends('layouts.admin')
@section('title', 'Daftar Berita')

@section('breadcrumb')
    <li class="breadcrumb-item active">Daftar Berita</li>
@endsection

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<div class="row mb-4">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center bg-white p-3 rounded shadow-sm">
            <h2 class="mb-0 text-dark">
                <i class="fas fa-newspaper me-2"></i>
                Manajemen Berita
            </h2>
            <div class="d-flex gap-3">
                <a href="{{ url('/') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-home me-2"></i>
                    KEMBALI KE HOME
                </a>
                
                <a href="{{ route('admin.berita.create') }}" class="btn btn-success btn-lg">
                    <i class="fas fa-plus me-2"></i>
                    TAMBAH BERITA
                </a>
                
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Apakah Anda yakin ingin logout?')">
                    <i class="fas fa-sign-out-alt me-2"></i>
                    LOGOUT
                </button>
            </form>
            </div>
        </div>
    </div>
</div>


<!-- Statistics Cards -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card-custom">
            <div class="card-body text-center p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h3 class="mb-0 fw-bold" style="color: var(--primary-green);">{{ $beritas->count() }}</h3>
                        <small class="text-muted">Total Berita</small>
                    </div>
                    <div class="bg-light rounded-circle p-3">
                        <i class="fas fa-newspaper fs-4" style="color: var(--primary-green);"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card-custom">
            <div class="card-body text-center p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h3 class="mb-0 fw-bold text-warning">{{ $beritas->where('kategori', 'prestasi')->count() }}</h3>
                        <small class="text-muted">Prestasi</small>
                    </div>
                    <div class="bg-light rounded-circle p-3">
                        <i class="fas fa-trophy fs-4 text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card-custom">
            <div class="card-body text-center p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h3 class="mb-0 fw-bold text-info">{{ $beritas->where('kategori', 'kegiatan')->count() }}</h3>
                        <small class="text-muted">Kegiatan</small>
                    </div>
                    <div class="bg-light rounded-circle p-3">
                        <i class="fas fa-calendar-alt fs-4 text-info"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card-custom">
            <div class="card-body text-center p-3">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h3 class="mb-0 fw-bold text-success">{{ $beritas->where('kategori', 'ekstrakulikuler')->count() }}</h3>
                        <small class="text-muted">Ekstrakulikuler</small>
                    </div>
                    <div class="bg-light rounded-circle p-3">
                        <i class="fas fa-users fs-4 text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Card -->
<div class="card-custom">
    <div class="card-header-custom">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="mb-0 d-flex align-items-center">
                Daftar Berita
            </h4>
        </div>
    </div>
    
    <div class="card-body p-0">
        <!-- Search Bar -->
        <div class="p-3 border-bottom">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="form-control" id="searchInput" placeholder="Cari berita berdasarkan judul atau isi..." onkeyup="searchBerita()">
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <small class="text-muted" id="searchResult">
                        <i class="fas fa-info-circle me-1"></i>
                        Menampilkan <span id="totalShown">{{ $beritas->count() }}</span> berita
                    </small>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" id="beritaTable">
                <thead style="background-color: #f8f9fa;">
                    <tr>
                        <th class="px-3 py-3 fw-semibold">No</th>
                        <th class="px-3 py-3 fw-semibold">Gambar</th>
                        <th class="px-3 py-3 fw-semibold">Judul</th>
                        <th class="px-3 py-3 fw-semibold">Kategori</th>
                        <th class="px-3 py-3 fw-semibold">Isi</th>
                        <th class="px-3 py-3 fw-semibold">Tanggal</th>
                        <th class="px-3 py-3 fw-semibold text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($beritas as $index => $berita)
                        <tr class="berita-row" data-judul="{{ strtolower($berita->judul) }}" data-isi="{{ strtolower($berita->isi) }}" data-kategori="{{ strtolower($berita->kategori) }}">
                            <td class="px-3 py-3">
                                <span class="badge bg-light text-dark">{{ $index + 1 }}</span>
                            </td>
                            <td class="px-3 py-3" style="width: 100px;">
                                @if($berita->gambar)
                                    <div class="image-container position-relative">
                                        <img 
                                            src="{{ asset('storage/berita/' . $berita->gambar) }}" 
                                            alt="Gambar Berita" 
                                            class="img-thumbnail"
                                            style="width: 60px; height: 60px; object-fit: cover; cursor: pointer;"
                                            onclick="showImageModal('{{ asset('storage/berita/' . $berita->gambar) }}', '{{ $berita->judul }}')"
                                        >
                                    </div>
                                @else
                                    <div class="d-flex align-items-center justify-content-center bg-light rounded" style="width: 60px; height: 60px;">
                                        <i class="fas fa-image text-muted"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="px-3 py-3">
                                <div class="fw-semibold text-dark">{{ $berita->judul }}</div>
                                <small class="text-muted">
                                    <i class="fas fa-user me-1"></i>
                                    Admin
                                </small>
                            </td>
                            <td class="px-3 py-3">
                                @php
                                    $kategoriConfig = [
                                        'prestasi' => ['icon' => 'fas fa-trophy', 'color' => 'warning', 'text' => 'Prestasi'],
                                        'kegiatan' => ['icon' => 'fas fa-calendar-alt', 'color' => 'info', 'text' => 'Kegiatan'],
                                        'ekstrakulikuler' => ['icon' => 'fas fa-users', 'color' => 'success', 'text' => 'Ekstrakulikuler']
                                    ];
                                    $config = $kategoriConfig[$berita->kategori] ?? ['icon' => 'fas fa-tag', 'color' => 'secondary', 'text' => ucfirst($berita->kategori)];
                                @endphp
                                <span class="badge bg-{{ $config['color'] }}">
                                    <i class="{{ $config['icon'] }} me-1"></i>
                                    {{ $config['text'] }}
                                </span>
                            </td>
                            <td class="px-3 py-3" style="max-width: 300px;">
                                <div class="text-wrap">{{ Str::limit($berita->isi, 100) }}</div>
                            </td>
                            <td class="px-3 py-3">
                                <div class="fw-semibold">{{ $berita->created_at->format('d M Y') }}</div>
                                <small class="text-muted">{{ $berita->created_at->format('H:i') }}</small>
                            </td>
                            <td class="px-3 py-3 text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('admin.berita.edit', $berita->id) }}" 
                                        class="btn btn-warning btn-sm" 
                                        data-bs-toggle="tooltip" 
                                        title="Edit Berita">
                                            ✏️
                                        </a>
                                    
                                    <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Hapus Berita" onclick="return confirm('Apakah Anda yakin ingin menghapus berita: {{ addslashes($berita->judul) }} ?')">
                                            🗑️
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr id="noDataRow">
                            <td colspan="7" class="text-center py-5">
                                <div class="empty-state">
                                    <i class="fas fa-newspaper fs-1 text-muted mb-3"></i>
                                    <h5 class="text-muted">Belum ada berita</h5>
                                    <p class="text-muted mb-3">Mulai dengan menambahkan berita pertama Anda</p>
                                    <a href="{{ route('admin.berita.create') }}" class="btn btn-success btn-lg">
                                        <i class="fas fa-plus me-2"></i>
                                        TAMBAH BERITA BARU
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- No Search Results -->
<div id="noSearchResults" class="text-center py-5" style="display: none;">
    <div class="empty-state">
        <i class="fas fa-search fs-1 text-muted mb-3"></i>
        <h5 class="text-muted">Tidak ada hasil pencarian</h5>
        <p class="text-muted mb-3">Coba gunakan kata kunci yang berbeda</p>
        <button class="btn btn-outline-secondary" onclick="clearSearch()">
            <i class="fas fa-times me-2"></i>
            Hapus Pencarian
        </button>
    </div>
</div>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalTitle">Preview Gambar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" class="img-fluid rounded" style="max-height: 400px;">
            </div>
        </div>
    </div>
</div>

<style>
    .btn-primary {
    background: linear-gradient(45deg, #007bff, #0056b3);
    border: none;
    color: white;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, #0056b3, #004085);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 123, 255, 0.4);
        color: white;
    }
    .btn-lg {
        padding: 12px 24px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .btn-success {
        background: linear-gradient(45deg, #28a745, #20c997);
        border: none;
        color: white;
    }
    
    .btn-success:hover {
        background: linear-gradient(45deg, #218838, #1abc9c);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(40, 167, 69, 0.4);
        color: white;
    }
    
    .btn-danger {
        background: linear-gradient(45deg, #dc3545, #e74c3c);
        border: none;
        color: white;
    }
    
    .btn-danger:hover {
        background: linear-gradient(45deg, #c82333, #c0392b);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(220, 53, 69, 0.4);
        color: white;
    }

    .action-btn {
        border-radius: 8px !important;
        padding: 8px 12px;
        transition: all 0.3s ease;
        border: 2px solid transparent;
        min-width: 40px;
        min-height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        font-weight: bold;
    }
    
    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
    .btn-warning.action-btn {
        background-color: #ffc107 !important;
        color: #000 !important;
        border-color: #ffc107 !important;
    }
    
    .btn-warning.action-btn:hover {
        background-color: #ffb300 !important;
        color: #000 !important;
        border-color: #ffb300 !important;
    }
    
    .btn-danger.action-btn {
        background-color: #dc3545 !important;
        color: #fff !important;
        border-color: #dc3545 !important;
    }
    
    .btn-danger.action-btn:hover {
        background-color: #c82333 !important;
        color: #fff !important;
        border-color: #c82333 !important;
    }

    .search-highlight {
        background-color: yellow;
        font-weight: bold;
    }

    .image-container:hover img {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }
    
    .berita-row:hover {
        background-color: rgba(60, 154, 48, 0.05);
    }
    
    .empty-state {
        padding: 2rem;
    }
    
    .table th {
        border-bottom: 2px solid var(--primary-green);
        color: #495057;
    }
    
    .badge {
        font-size: 0.75rem;
        padding: 0.5rem 0.75rem;
    }

    .card-header-custom {
        padding: 1.25rem;
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        border-radius: 0.375rem 0.375rem 0 0;
    }

    .card-header-custom h4 {
        font-weight: 600;
        color: #495057;
    }

    .card-header-custom .fas {
        font-size: 1.1rem;
        vertical-align: middle;
    }

    .header-icon {
        width: 20px;
        height: 20px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    
    .card-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .btn-lg {
            padding: 10px 16px;
            font-size: 14px;
        }
        
        .d-flex.gap-3 {
            flex-direction: column;
            gap: 10px !important;
        }
    }
</style>
@endsection