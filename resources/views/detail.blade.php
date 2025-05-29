<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membanggakan, Siswa Siswi Memenangkan Lomba Pramuka - MI Roudlotul Huda</title>
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
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px 20px;
            background: white;
            min-height: calc(100vh - 200px);
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #4CAF50;
            text-decoration: none;
            margin-bottom: 25px;
            font-size: 16px;
            font-weight: 500;
            padding: 12px 20px;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border: 2px solid #e9ecef;
            border-radius: 25px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .back-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(76, 175, 80, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .back-button:hover {
            color: #2E7D32;
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            border-color: #4CAF50;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }

        .back-button:hover::before {
            left: 100%;
        }

        .back-button:active {
            transform: translateY(0);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .back-button .arrow {
            font-size: 18px;
            transition: transform 0.3s ease;
        }

        .back-button:hover .arrow {
            transform: translateX(-3px);
        }

        .article-header {
            margin-bottom: 30px;
        }

        .article-title {
            font-size: 32px;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .article-meta {
            display: flex;
            gap: 20px;
            align-items: center;
            margin-bottom: 25px;
        }

        .category-tag {
            background: #4CAF50;
            color: white;
            padding: 6px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }

        .article-date {
            color: #666;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .article-image {
            width: 100%;
            max-width: 800px;
            margin: 0 auto 30px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .article-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .article-content {
            font-size: 16px;
            line-height: 1.8;
            color: #444;
        }

        .article-content p {
            margin-bottom: 20px;
            text-align: justify;
        }

       /* Footer */
        .footer {
            background: linear-gradient(135deg, #FF9800, #FFB74D);
            color: white;
            padding: 40px 0;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 40px;
        }

        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .footer-section p {
            margin-bottom: 10px;
            line-height: 1.6;
            font-size: 14px;
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
            font-size: 14px;
        }

        .social-icon {
            width: 30px;
            height: 30px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .hours-info {
            font-size: 14px;
        }

        .hours-info div {
            margin-bottom: 8px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-main .container {
                flex-direction: column;
                gap: 20px;
            }

            .nav-menu {
                gap: 15px;
            }

            .nav-menu a {
                font-size: 14px;
                padding: 6px 10px;
            }

            .article-title {
                font-size: 24px;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .contact-info {
                flex-direction: column;
                gap: 10px;
            }
        }

        @media (max-width: 480px) {
            .main-content {
                padding: 20px 15px;
            }

            .article-title {
                font-size: 20px;
            }

            .article-meta {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
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
                <span>✉️ miruhasda@gmail.com</span>
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
        <a href="#" class="back-button">
            <span class="arrow">←</span>
            <span>Kembali</span>
        </a>
        
       <article>
        <header class="article-header">
            <h1 class="article-title">{{ $berita->judul }}</h1>
            <div class="article-meta">
                <span class="category-tag">{{ $berita->kategori }}</span>
                <span class="article-date">🗓️ {{ \Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}</span>
            </div>
            <div class="article-image">
                <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
            </div>
            <div class="article-content">
                {!! $berita->isi !!}
            </div>
        </header>
        </article>

        </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>MI ROUDLOTUL HUDA WEDORO KLURAK</h3>
                <p><strong>Alamat:</strong> Desa Wedoro Klurak RT 09 RW 02</p>
                <p>Candi Sidoarjo, Jawa Timur, Indonesia</p>
            </div>
            
            <div class="footer-section">
                <h3>Media Sosial</h3>
                <div class="social-links">
                    <a href="#" class="social-link">
                        <div class="social-icon">📘</div>
                        <span>@Miruhawedoroklurak</span>
                    </a>
                    <a href="#" class="social-link">
                        <div class="social-icon">📷</div>
                        <span>@Miruhawedoroklurak</span>
                    </a>
                    <a href="#" class="social-link">
                        <div class="social-icon">🎥</div>
                        <span>@Miruhawedoroklurak</span>
                    </a>
                    <a href="#" class="social-link">
                        <div class="social-icon">📱</div>
                        <span>+62 123 456</span>
                    </a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Jam Operasional</h3>
                <div class="hours-info">
                    <div><strong>Senin - Jumat:</strong> 07:00 - 17:00</div>
                    <div><strong>Sabtu - Minggu:</strong> 08:00 - 16:00</div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>