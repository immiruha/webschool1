@extends('layouts.admin')
@section('title', 'Tambah Berita Baru')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.berita.index') }}">Berita</a></li>
    <li class="breadcrumb-item active">Tambah Berita Baru</li>
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
                    <i class="fas fa-plus-circle me-2"></i>
                    Tambah Berita Baru
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

                <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf

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
                            value="{{ old('judul') }}" 
                            placeholder="Masukkan judul berita yang menarik..."
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
                            <option value="" disabled {{ old('kategori') ? '' : 'selected' }}>
                                Pilih Kategori
                            </option>
                            <option value="prestasi" {{ old('kategori') == 'prestasi' ? 'selected' : '' }}>
                                🏆 Prestasi
                            </option>
                            <option value="kegiatan" {{ old('kategori') == 'kegiatan' ? 'selected' : '' }}>
                                📅 Kegiatan
                            </option>
                            <option value="ekstrakulikuler" {{ old('kategori') == 'ekstrakulikuler' ? 'selected' : '' }}>
                                🎯 Ekstrakulikuler
                            </option>
                        </select>
                        @error('kategori')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-info-circle me-1"></i>
                            Pilih kategori yang sesuai dengan isi berita
                        </div>
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
                            placeholder="Tulis isi berita di sini... Ceritakan dengan detail dan menarik!"
                            required
                        >{{ old('isi') }}</textarea>
                        @error('isi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-info-circle me-1"></i>
                            Minimal 50 karakter untuk isi berita
                        </div>
                    </div>

                    <!-- Upload Gambar -->
                    <div class="mb-4">
                        <label for="gambar" class="form-label fw-semibold">
                            <i class="fas fa-camera me-2 text-muted"></i>
                            Upload Gambar
                        </label>
                        <div class="upload-area border-2 border-dashed rounded p-4 text-center" style="border-color: #dee2e6; transition: all 0.3s ease;">
                            <input 
                                type="file" 
                                name="gambar" 
                                id="gambar" 
                                class="form-control @error('gambar') is-invalid @enderror"
                                accept="image/*"
                                onchange="previewImage(this)"
                                style="display: none;"
                            >
                            <div id="uploadPlaceholder">
                                <i class="fas fa-cloud-upload-alt fs-1 text-muted mb-3"></i>
                                <h5 class="text-muted">Klik untuk upload gambar</h5>
                                <p class="text-muted mb-0">atau drag & drop file di sini</p>
                                <button type="button" class="btn btn-outline-success mt-3" onclick="document.getElementById('gambar').click()">
                                    <i class="fas fa-folder-open me-2"></i>
                                    Pilih File
                                </button>
                            </div>
                        </div>
                        @error('gambar')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        <div class="form-text">
                            <i class="fas fa-info-circle me-1"></i>
                            Format yang didukung: JPG, PNG, GIF. Maksimal 2MB
                        </div>
                        
                        <!-- Preview Gambar -->
                        <div id="imagePreview" class="mt-3" style="display: none;">
                            <div class="p-3 border rounded" style="background-color: #f8f9fa;">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h6 class="mb-0">
                                        <i class="fas fa-eye me-2"></i>
                                        Preview Gambar
                                    </h6>
                                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="removeImage()">
                                        <i class="fas fa-trash me-1"></i>
                                        Hapus
                                    </button>
                                </div>
                                <img id="preview" class="img-fluid rounded shadow-sm" style="max-height: 200px;">
                                <div class="mt-2">
                                    <small class="text-muted" id="imageInfo"></small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-flex gap-3 pt-3 border-top">
                        <button type="submit" class="btn btn-lg flex-fill" style="background-color: #3C9A30; color: #FFFFFF; border: none;">
                            <i class="fas fa-save me-2"></i>
                            Simpan Berita
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
    .upload-area {
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .upload-area:hover {
        border-color: #3C9A30 !important;
        background-color: rgba(60, 154, 48, 0.05);
    }
    
    .upload-area.dragover {
        border-color: #3C9A30 !important;
        background-color: rgba(60, 154, 48, 0.1);
        transform: scale(1.02);
    }
    
    .form-control:focus,
    .form-select:focus {
        border-color: #3C9A30;
        box-shadow: 0 0 0 0.2rem rgba(60, 154, 48, 0.25);
    }
    
    .btn-outline-success {
        border-color: #3C9A30;
        color: #3C9A30;
    }
    
    .btn-outline-success:hover {
        background-color: #3C9A30;
        border-color: #3C9A30;
        color: white;
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
        const uploadPlaceholder = document.getElementById('uploadPlaceholder');
        const imageInfo = document.getElementById('imageInfo');
        
        if (input.files && input.files[0]) {
            const file = input.files[0];
            const reader = new FileReader();
            
            reader.onload = function(e) {
                preview.src = e.target.result;
                previewContainer.style.display = 'block';
                uploadPlaceholder.style.display = 'none';
                
                // Show file info
                const fileSize = (file.size / 1024 / 1024).toFixed(2);
                imageInfo.textContent = `${file.name} (${fileSize} MB)`;
            };
            
            reader.readAsDataURL(file);
        }
    }

    // Remove image function
    function removeImage() {
        const input = document.getElementById('gambar');
        const previewContainer = document.getElementById('imagePreview');
        const uploadPlaceholder = document.getElementById('uploadPlaceholder');
        
        input.value = '';
        previewContainer.style.display = 'none';
        uploadPlaceholder.style.display = 'block';
    }

    // Drag and drop functionality
    document.addEventListener('DOMContentLoaded', function() {
        const uploadArea = document.querySelector('.upload-area');
        const fileInput = document.getElementById('gambar');

        // Click to upload
        uploadArea.addEventListener('click', function(e) {
            if (e.target.type !== 'file') {
                fileInput.click();
            }
        });

        // Drag and drop events
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            uploadArea.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            uploadArea.addEventListener(eventName, unhighlight, false);
        });

        function highlight(e) {
            uploadArea.classList.add('dragover');
        }

        function unhighlight(e) {
            uploadArea.classList.remove('dragover');
        }

        uploadArea.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;

            if (files.length > 0) {
                fileInput.files = files;
                previewImage(fileInput);
            }
        }

        // Character counter for textarea
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