@extends('layouts.admin')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card-custom fade-in">
            <div class="card-header-custom text-center py-4">
                <h3 class="mb-0">
                    <i class="fas fa-user-shield me-2"></i>
                    Login Admin Panel
                </h3>
            </div>
            <div class="card-body p-4 p-lg-5">
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        {{ $errors->first() }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="mb-4">
                        <div class="form-floating">
                            <input 
                                id="email" 
                                type="email" 
                                name="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                value="{{ old('email') }}" 
                                placeholder="Email Address"
                                required 
                                autofocus
                            >
                            <label for="email">
                                <i class="fas fa-envelope me-2 text-muted"></i>
                                Email Address
                            </label>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="form-floating">
                            <input 
                                id="password" 
                                type="password" 
                                name="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                placeholder="Password"
                                required
                            >
                            <label for="password">
                                <i class="fas fa-lock me-2 text-muted"></i>
                                Password
                            </label>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4 form-check">
                        <input 
                            class="form-check-input" 
                            type="checkbox" 
                            name="remember" 
                            id="remember" 
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>

                    <div class="d-grid gap-2 mb-4">
                        <button type="submit" class="btn btn-primary-custom btn-lg">
                            <i class="fas fa-sign-in-alt me-2"></i>
                            Login
                        </button>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="text-center">
                            <a href="{{ route('password.request') }}" class="text-decoration-none" style="color: var(--primary-green);">
                                <i class="fas fa-key me-1"></i>
                                Forgot Your Password?
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    /* Override for login page */
    .main-content {
        display: flex;
        align-items: center;
        min-height: calc(100vh - 200px);
    }
    
    .form-floating > label {
        padding-left: 1rem;
    }
    
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label {
        padding-left: 0.75rem;
    }
    
    .btn-primary-custom {
        background: linear-gradient(135deg, var(--primary-green) 0%, var(--light-green) 100%);
        border: none;
        border-radius: 8px;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-primary-custom:hover {
        background: linear-gradient(135deg, var(--dark-green) 0%, var(--primary-green) 100%);
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(60, 154, 48, 0.4);
    }
</style>
@endsection

@push('scripts')
<script>
    // Hide sidebar on login page
    document.addEventListener('DOMContentLoaded', function() {
        const sidebarElement = document.querySelector('.sidebar');
        const contentElement = document.querySelector('.col-md-9.col-lg-10');
        
        if (sidebarElement) {
            sidebarElement.style.display = 'none';
        }
        
        if (contentElement) {
            contentElement.className = 'col-md-12 col-lg-12';
        }
        
        // Form validation
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    });
</script>
@endpush