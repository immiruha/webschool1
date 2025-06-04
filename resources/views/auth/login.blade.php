@extends('layouts.admin')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="login-section">
        <div class="logo-section">
            <div class="logo">
                <div class="logo-icon">🏫</div>
                <div class="logo-text">MI Roudlotul Huda</div>
            </div>
        </div>

        <div class="login-form">
            <h1 class="login-title">Login</h1>
            <p class="login-subtitle">Login untuk mengakses halaman admin</p>

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert" style="background: #ff6b6b; color: white; border-radius: 10px; padding: 15px; margin-bottom: 20px; border: none;">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    {{ $errors->first() }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" style="filter: brightness(0) invert(1);"></button>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                @csrf
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input 
                        type="email" 
                        name="email" 
                        class="form-input @error('email') is-invalid @enderror" 
                        placeholder="Masukkan email anda" 
                        value="{{ old('email') }}"
                        required 
                        autofocus
                    >
                    @error('email')
                        <div class="invalid-feedback" style="color: #ff6b6b; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="password-wrapper">
                        <input 
                            type="password" 
                            name="password" 
                            class="form-input @error('password') is-invalid @enderror" 
                            placeholder="Masukkan password anda" 
                            id="password" 
                            required
                        >
                        <button type="button" class="password-toggle" onclick="togglePassword()">👁️</button>
                    </div>
                    @error('password')
                        <div class="invalid-feedback" style="color: #ff6b6b; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-options">
                    <div class="remember-me">
                        <input 
                            type="checkbox" 
                            name="remember" 
                            id="remember" 
                            {{ old('remember') ? 'checked' : '' }}
                        >
                        <label for="remember">Remember me</label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password</a>
                    @endif
                </div>

                <button type="submit" class="login-button">Login</button>
            </form>

            @if (Route::has('register'))
                <div class="signup-link">
                    Don't have an account? <a href="{{ route('register') }}">Sign up</a>
                </div>
            @endif
        </div>
    </div>

    <div class="illustration-section">
        <div class="phone-mockup">
            <div class="phone-screen">
                <div class="security-icon">
                    🔒
                    <div class="checkmark">✓</div>
                </div>
                <div class="password-dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Override for login page */
    .main-content {
        display: flex;
        align-items: center;
        min-height: 100vh;
        padding: 0;
        background: none;
    }
    
    /* Hide sidebar on login page */
    .sidebar {
        display: none !important;
    }
    
    /* Expand content area */
    .col-md-9.col-lg-10 {
        width: 100%;
        max-width: none;
        flex: 1;
        padding: 0;
    }
    
    /* Add your custom styles here */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .container {
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        display: flex;
        overflow: hidden;
        max-width: 1000px;
        width: 100%;
        min-height: 600px;
    }

    .login-section {
        flex: 1;
        padding: 60px 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .logo-section {
        margin-bottom: 40px;
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .logo-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #4CAF50, #45a049);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 18px;
    }

    .logo-text {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        text-transform: uppercase;
    }

    .login-title {
        font-size: 32px;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
    }

    .login-subtitle {
        color: #666;
        margin-bottom: 40px;
        font-size: 16px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 8px;
        color: #333;
        font-weight: 500;
        font-size: 14px;
    }

    .form-input {
        width: 100%;
        padding: 15px 20px;
        border: 2px solid #e1e5e9;
        border-radius: 10px;
        font-size: 16px;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }

    .form-input:focus {
        outline: none;
        border-color: #4CAF50;
        background: white;
        box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.1);
    }

    .password-wrapper {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        color: #666;
        font-size: 18px;
    }

    .form-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .remember-me {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .remember-me input {
        width: 18px;
        height: 18px;
        accent-color: #4CAF50;
    }

    .remember-me label {
        color: #666;
        font-size: 14px;
        cursor: pointer;
    }

    .forgot-password {
        color: #ff6b6b;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .forgot-password:hover {
        color: #ff5252;
        text-decoration: underline;
    }

    .login-button {
        width: 100%;
        background: linear-gradient(135deg, #4CAF50, #45a049);
        color: white;
        border: none;
        padding: 15px;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .login-button:hover {
        background: linear-gradient(135deg, #45a049, #4CAF50);
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(76, 175, 80, 0.3);
    }

    .signup-link {
        text-align: center;
        margin-top: 30px;
        color: #666;
        font-size: 14px;
    }

    .signup-link a {
        color: #ff6b6b;
        text-decoration: none;
        font-weight: 600;
    }

    .signup-link a:hover {
        text-decoration: underline;
    }

    .illustration-section {
        flex: 1;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .phone-mockup {
        width: 200px;
        height: 400px;
        background: white;
        border-radius: 25px;
        position: relative;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        transform: rotate(-5deg);
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: rotate(-5deg) translateY(0px); }
        50% { transform: rotate(-5deg) translateY(-20px); }
    }

    .phone-screen {
        margin: 20px;
        height: calc(100% - 40px);
        background: #f8f9fa;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    .security-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #4CAF50, #45a049);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 32px;
        box-shadow: 0 10px 20px rgba(76, 175, 80, 0.3);
    }

    .checkmark {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 30px;
        height: 30px;
        background: #4CAF50;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 16px;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
    }

    .password-dots {
        display: flex;
        gap: 5px;
        margin-top: 10px;
    }

    .dot {
        width: 12px;
        height: 12px;
        background: #4CAF50;
        border-radius: 50%;
        animation: pulse 1.5s infinite;
    }

    .dot:nth-child(2) { animation-delay: 0.3s; }
    .dot:nth-child(3) { animation-delay: 0.6s; }
    .dot:nth-child(4) { animation-delay: 0.9s; }

    @keyframes pulse {
        0%, 100% { opacity: 0.3; }
        50% { opacity: 1; }
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            margin: 10px;
        }

        .illustration-section {
            height: 200px;
            order: -1;
        }

        .phone-mockup {
            width: 120px;
            height: 240px;
            transform: rotate(0deg);
        }

        .login-section {
            padding: 30px 20px;
        }

        .login-title {
            font-size: 24px;
        }
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

    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleButton = document.querySelector('.password-toggle');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleButton.textContent = '🙈';
        } else {
            passwordInput.type = 'password';
            toggleButton.textContent = '👁️';
        }
    }

    // Add smooth focus animations
    document.querySelectorAll('.form-input').forEach(input => {
        input.addEventListener('focus', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        input.addEventListener('blur', function() {
            this.style.transform = 'translateY(0)';
        });
    });
</script>
@endpush