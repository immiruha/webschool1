@extends('layouts.admin')
@section('title', 'Edit Berita')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.berita.index') }}">Berita</a></li>
    <li class="breadcrumb-item active">Edit Berita</li>
@endsection

@section('page-actions')
    <a href="{{ route('admin.berita.index') }}" class="btn btn-outline-light">
        <i class="fas fa-arrow-left me-2"></i>
        Kembali
    </a>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card-custom">
            <div class="card-header-custom">
                <h4 class="mb-0">
                    <i class="fas fa-edit me-2"></i>
                    Edit Berita
                </h4>
            </div>
            <div class="card-body p-4">
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <strong>Terdapat kesalahan:</strong>
                        <ul class="mb-0 mt-2">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')

                    <!-- Judul -->
                    <div class="mb-4">
                        <label for="judul" class="form-label fw-semibold">
                            <i class="fas fa-heading me-2 text-muted"></i>
                            Judul Berita
                        </label>
                        <input 
                            type="text" 
                            name="judul" 
                            id="judul" 
                            class="form-control form-control-lg @error('judul') is-invalid @enderror" 
                            value="{{ old('judul', $berita->judul) }}" 
                            placeholder="Masukkan judul berita..."
                            required
                        >
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-info-circle me-1"></i>
                            Judul yang menarik akan meningkatkan minat pembaca
                        </div>
                    </div>

                    <!-- Kategori -->
                    <div class="mb-4">
                        <label for="kategori" class="form-label fw-semibold">
                            <i class="fas fa-tags me-2 text-muted"></i>
                            Kategori
                        </label>
                        <select name="kategori" id="kategori" class="form-select form-select-lg @error('kategori') is-invalid @enderror" required>
                            <option value="" disabled {{ old('kategori', $berita->kategori) ? '' : 'selected' }}>
                                Pilih Kategori
                            </option>
                            <option value="prestasi" {{ old('kategori', $berita->kategori) == 'prestasi' ? 'selected' : '' }}>
                                🏆 Prestasi
                            </option>
                            <option value="kegiatan" {{ old('kategori', $berita->kategori) == 'kegiatan' ? 'selected' : '' }}>
                                📅 Kegiatan
                            </option>
                            <option value="ekstrakulikuler" {{ old('kategori', $berita->kategori) == 'ekstrakulikuler' ? 'selected' : '' }}>
                                🎯 Ekstrakulikuler
                            </option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Isi Berita -->
                    <div class="mb-4">
                        <label for="isi" class="form-label fw-semibold">
                            <i class="fas fa-align-left me-2 text-muted"></i>
                            Isi Berita
                        </label>
                        <textarea 
                            name="isi" 
                            id="isi" 
                            rows="8" 
                            class="form-control @error('isi') is-invalid @enderror" 
                            placeholder="Tulis isi berita di sini..."
                            required
                        >{{ old('isi', $berita->isi) }}</textarea>
                        @error('isi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-info-circle me-1"></i>
                            Minimal 50 karakter untuk isi berita
                        </div>
                    </div>

                    <!-- Gambar Saat Ini -->
                    @if ($berita->gambar)
                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                <i class="fas fa-image me-2 text-muted"></i>
                                Gambar Saat Ini
                            </label>
                            <div class="current-image-container p-3 border rounded" style="background-color: #f8f9fa;">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <img 
                                            src="{{ asset('storage/berita/' . $berita->gambar) }}" 
                                            alt="Gambar Berita" 
                                            class="img-fluid rounded shadow-sm"
                                            style="max-height: 150px; width: 100%; object-fit: cover;"
                                        >
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="mb-2">{{ $berita->gambar }}</h6>
                                        <p class="text-muted mb-0">
                                            <i class="fas fa-info-circle me-1"></i>
                                            Upload gambar baru untuk mengganti gambar ini
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Upload Gambar Baru -->
                    <div class="mb-4">
                        <label for="gambar" class="form-label fw-semibold">
                            <i class="fas fa-camera me-2 text-muted"></i>
                            {{ $berita->gambar ? 'Ganti Gambar (Opsional)' : 'Upload Gambar' }}
                        </label>
                        <input 
                            type="file" 
                            name="gambar" 
                            id="gambar" 
                            class="form-control @error('gambar') is-invalid @enderror"
                            accept="image/*"
                            onchange="previewImage(this)"
                        >
                        @error('gambar')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-info-circle me-1"></i>
                            Format yang didukung: JPG, PNG, GIF. Maksimal 2MB
                        </div>
                        
                        <!-- Preview Gambar Baru -->
                        <div id="imagePreview" class="mt-3" style="display: none;">
                            <div class="p-3 border rounded" style="background-color: #f8f9fa;">
                                <h6 class="mb-2">
                                    <i class="fas fa-eye me-2"></i>
                                    Preview Gambar Baru
                                </h6>
                                <img id="preview" class="img-fluid rounded shadow-sm" style="max-height: 200px;">
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex gap-3 pt-3 border-top">
                        <button type="submit" class="btn btn-lg flex-fill" style="background-color: #3C9A30; color: #FFFFFF; border: none;">
                            <i class="fas fa-save me-2"></i>
                            Update Berita
                        </button>
                        <a href="{{ route('admin.berita.index') }}" class="btn btn-lg" style="background-color: #FFFFFF; color: #3C9A30; border: 1px solid #3C9A30;">
                            <i class="fas fa-times me-2"></i>
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .current-image-container {
        transition: all 0.3s ease;
    }
    
    .current-image-container:hover {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    
    .form-control:focus,
    .form-select:focus {
        border-color: #3C9A30;
        box-shadow: 0 0 0 0.2rem rgba(60, 154, 48, 0.25);
    }
    
    #imagePreview {
        animation: fadeIn 0.3s ease-in;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .btn-lg {
        padding: 12px 24px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .btn-lg:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }
    
    button[type="submit"].btn-lg {
        background-color: #3C9A30;
        color: #FFFFFF;
    }
    
    button[type="submit"].btn-lg:hover {
        background-color: #348529;
    }
    
    a.btn-lg {
        background-color: #FFFFFF;
        color: #3C9A30;
        border: 1px solid #3C9A30;
    }
    
    a.btn-lg:hover {
        background-color: #f8f9fa;
    }
</style>
@endsection

@push('scripts')
<script>
    // Form validation
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    // Image preview function
    function previewImage(input) {
        const preview = document.getElementById('preview');
        const previewContainer = document.getElementById('imagePreview');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                previewContainer.style.display = 'block';
            };
            
            reader.readAsDataURL(input.files[0]);
        } else {
            previewContainer.style.display = 'none';
        }
    }

    // Character counter for textarea
    document.addEventListener('DOMContentLoaded', function() {
        const textarea = document.getElementById('isi');
        const minLength = 50;
        
        // Create character counter
        const counter = document.createElement('div');
        counter.className = 'form-text mt-1';
        counter.innerHTML = `<i class="fas fa-keyboard me-1"></i><span id="charCount">0</span> karakter (minimal ${minLength})`;
        textarea.parentNode.appendChild(counter);
        
        // Update counter
        function updateCounter() {
            const count = textarea.value.length;
            const countSpan = document.getElementById('charCount');
            countSpan.textContent = count;
            
            if (count < minLength) {
                counter.className = 'form-text mt-1 text-warning';
            } else {
                counter.className = 'form-text mt-1 text-success';
            }
        }
        
        textarea.addEventListener('input', updateCounter);
        updateCounter(); // Initial count
    });

    // Auto-hide alerts
    setTimeout(function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(function(alert) {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        });
    }, 5000);
</script>
@endpush