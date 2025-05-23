<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Roudlotul Huda Wedoro Klurak</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        /* Header Top */
        .header-top {
            background-color: #4CAF50;
            color: white;
            padding: 8px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
        }

        .contact-info {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .contact-info span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

       /* Navigation Styles */
        .main-nav {
            background-color: white;
            padding: 10px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 50px;
            margin-right: 10px;
        }
        
        .logo-text {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }
        
        .nav-links {
            display: flex;
            gap: 20px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }
        
        /* Main Content */
        .main-content {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, #4CAF50, #66BB6A);
            padding: 50px;
            border-radius: 25px;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(76, 175, 80, 0.3);
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            pointer-events: none;
        }

        .contact-section h2 {
            font-size: 36px;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
            padding: 15px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(10px);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .contact-text {
            font-size: 18px;
            font-weight: 500;
        }

        /* Photo Section (formerly Map Section) */
        .photo-section {
            margin-top: 20px;
        }

        .photo-section h2 {
            font-size: 36px;
            color: #4CAF50;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .photo-container {
            border-radius: 15px;
            overflow: hidden;
            height: 400px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .photo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .photo-container img:hover {
            transform: scale(1.03);
        }

        /* Footer */
        .footer {
            background-color: #FF8C00;
            color: white;
            padding: 40px 5%;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-left {
            flex: 0 0 55%;
        }

        .footer-right {
            flex: 0 0 40%;
        }

        .footer-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .footer-address {
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .footer-address p {
            margin-bottom: 5px;
        }

        .social-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .social-link {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            transform: translateX(5px);
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .footer-map {
            height: 200px;
            background-color: #e9e9e9;
            border-radius: 5px;
            overflow: hidden;
        }

        .footer-map img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-top {
                flex-direction: column;
                gap: 10px;
            }

            .contact-info {
                gap: 15px;
                font-size: 12px;
            }

            .nav-container {
                flex-direction: column;
                gap: 15px;
            }

            .nav-links {
                gap: 10px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .container {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 0 15px;
            }

            .contact-section, .photo-container {
                padding: 30px 20px;
            }

            .photo-container {
                height: 300px;
            }

            .footer-content {
                flex-direction: column;
                gap: 30px;
            }

            .footer-left, .footer-right {
                flex: 1;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-top">
            <div class="contact-info">
                <span>📞 +62 811 234 4578</span>
                <span>✉️ injemailsekolah@gmail.com</span>
            </div>
        </div>
        
         <!-- Main Navigation -->
        <nav class="main-nav">
            <div class="logo">
                <img src="/images/logomiruha.jpg" alt="Logo MI Roudlotul Huda">
                <div class="logo-text">MI Roudlotul Huda<br>Wedoro, Klurak, Sidoarjo</div>
            </div>
            <div class="nav-links">
                <a href="{{ url('/') }}" class="active">Beranda</a>
                <a href="{{ route('tentang') }}">Tentang Kami</a>
                <a href="{{ route('hubungi') }}">Hubungi Kami</a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Contact Section -->
            <section class="contact-section">
                <h2>Hubungi Kami</h2>
                
                <div class="contact-item">
                    <div class="contact-icon">📘</div>
                    <div class="contact-text">@Miruhawedoroklurak</div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">📷</div>
                    <div class="contact-text">@Miruhawedoroklurak</div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">✉️</div>
                    <div class="contact-text">@Miruhawedoroklurak</div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">📱</div>
                    <div class="contact-text">+62 123 456</div>
                </div>
            </section>

            <!-- Photo Section (formerly Map Section) -->
            <section class="photo-section">
                <h2>Kunjungi Kami 📍</h2>
                <div class="photo-container">
                    <img src="images/sekolahmiruha.jpg" alt="Foto MI Roudlotul Huda">
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-left">
                <div class="footer-title">MI ROUDLOTUL HUDA WEDORO KLURAK</div>
                <div class="footer-address">
                    <p><strong>Alamat:</strong> Desa Wedoro Klurak RT 09 RW 02</p>
                    <p>Candi Sidoarjo, Jawa Timur, Indonesia</p>
                </div>
                
                <div class="social-links">
                    <a href="#" class="social-link">
                        <div class="social-icon">📱</div>
                        <span>WhatsApp: +62 123 456</span>
                    </a>
                    <a href="#" class="social-link">
                        <div class="social-icon">📘</div>
                        <span>@Miruhawedoroklurak</span>
                    </a>
                    <a href="#" class="social-link">
                        <div class="social-icon">📷</div>
                        <span>@Miruhawedoroklurak</span>
                    </a>
                </div>
            </div>
            
            <div class="footer-right">
                <div class="footer-map">
                     <a href="https://maps.app.goo.gl/GXGbhuRiG6ThPVjm8" target="_blank">
                        <img src="/images/mapsmiruha.jpg" alt="Peta Lokasi">
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>