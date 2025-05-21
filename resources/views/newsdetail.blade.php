<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI Roudlotul Huda - Detail Berita</title>
    <style>
        :root {
            --primary-color: #3e8e41;
            --secondary-color: #006838;
            --accent-color: #ff8c00;
            --text-color: #333;
            --light-bg: #f9f9f9;
            --white: #fff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        body {
            background-color: var(--white);
            color: var(--text-color);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header Styles */
        .top-header {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 5px 0;
        }
        
        .top-header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .top-header-contact {
            display: flex;
            align-items: center;
        }
        
        .top-header-contact span {
            margin-right: 20px;
            font-size: 14px;
            display: flex;
            align-items: center;
        }
        
        .top-header-contact span i {
            margin-right: 5px;
        }
        
        .main-header {
            padding: 10px 0;
            background-color: var(--white);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .main-header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 70px;
            margin-right: 15px;
        }
        
        .logo-text {
            line-height: 1.2;
        }
        
        .logo-text h1 {
            font-size: 18px;
            font-weight: 700;
            color: var(--secondary-color);
        }
        
        .logo-text p {
            font-size: 14px;
            color: var(--text-color);
        }
        
        .main-nav ul {
            display: flex;
            list-style: none;
        }
        
        .main-nav ul li {
            margin-left: 20px;
        }
        
        .main-nav ul li a {
            color: var(--text-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 5px 10px;
            font-size: 15px;
        }
        
        .main-nav ul li a:hover, .main-nav ul li a.active {
            color: var(--primary-color);
        }
        
        /* Content Styles */
        .content {
            padding: 30px 0;
        }
        
        .back-button {
            color: #777;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .back-button svg {
            margin-right: 5px;
        }
        
        .news-title {
            font-size: 32px;
            color: var(--secondary-color);
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
            line-height: 1.3;
        }
        
        .news-meta {
            display: flex;
            margin-bottom: 20px;
        }
        
        .news-category {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 5px 15px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }
        
        .news-date {
            display: flex;
            align-items: center;
            margin-left: 15px;
            color: #666;
            font-size: 14px;
        }
        
        .news-date svg {
            margin-right: 5px;
        }
        
        .news-image {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 25px;
        }
        
        .news-content {
            font-size: 16px;
            line-height: 1.7;
        }
        
        .news-content p {
            margin-bottom: 20px;
        }
        
        /* Footer Styles */
        .footer {
            background-color: var(--accent-color);
            color: var(--white);
            padding: 40px 0 20px;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
        }
        
        .footer-left {
            flex: 2;
        }
        
        .footer-right {
            flex: 1;
            text-align: right;
        }
        
        .footer-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        
        .footer-address {
            margin-top: 15px;
            font-size: 14px;
        }
        
        .footer-social {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }
        
        .footer-social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: var(--white);
            border-radius: 50%;
            margin-left: 10px;
            color: var(--accent-color);
            text-decoration: none;
        }
        
        .footer-hours {
            margin-top: 20px;
        }
        
        .footer-hours p {
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .footer-contact {
            margin-top: 15px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }
        
        .footer-contact a {
            display: inline-flex;
            align-items: center;
            color: var(--white);
            text-decoration: none;
            font-size: 16px;
        }
        
        .footer-contact svg {
            margin-right: 8px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .top-header .container {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .top-header-contact span {
                margin-bottom: 5px;
            }
            
            .main-header .container {
                flex-direction: column;
            }
            
            .logo {
                margin-bottom: 15px;
            }
            
            .main-nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .main-nav ul li {
                margin: 5px 10px;
            }
            
            .news-title {
                font-size: 24px;
            }
            
            .footer-content {
                flex-direction: column;
            }
            
            .footer-left, .footer-right {
                text-align: center;
                margin-bottom: 20px;
            }
            
            .footer-social {
                justify-content: center;
                margin-top: 15px;
            }
            
            .footer-contact {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="top-header-contact">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328z"/>
                    </svg>
                    +62 811 234 4578
                </span>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                    </svg>
                    misekolah@gmail.com
                </span>
            </div>
        </div>
    </div>
    
    <!-- Main Header -->
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <img src="/api/placeholder/70/70" alt="Logo MI Roudlotul Huda">
                <div class="logo-text">
                    <h1>MI Roudlotul Huda</h1>
                    <p>Wedoro Klurak</p>
                </div>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="#" class="active">Beranda</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Hubungi Kami</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Content -->
    <section class="content">
        <div class="container">
            <a href="#" class="back-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
            </a>
            
            <h1 class="news-title">Membanggakan, Siswa Siswi Memenangkan Lomba Pramuka</h1>
            
            <div class="news-meta">
                <div class="news-category">Kegiatan</div>
                <div class="news-date">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>
                    24 Agustus 2021
                </div>
            </div>
            
            <img src="/api/placeholder/800/450" alt="Foto Siswa-siswi Pramuka" class="news-image">
            
            <div class="news-content">
                <p>Siswa-siswi MI Roudlotul Huda berhasil memenangkan perlombaan Pramuka tingkat kecamatan yang diselenggarakan pada hari Sabtu lalu. Tim yang terdiri dari 12 siswa kelas 4-6 ini menunjukkan kekompakan dan keterampilan luar biasa dalam berbagai bidang kepramukaan.</p>
                
                <p>Dalam kompetisi yang diikuti oleh 15 sekolah dasar dan madrasah ibtidaiyah se-kecamatan, MI Roudlotul Huda berhasil unggul dalam beberapa kategori lomba, termasuk pioneering, morse, semaphore, dan pendirian tenda. Keberhasilan ini merupakan hasil dari latihan intensif selama tiga bulan terakhir di bawah bimbingan Bapak Ahmad Fauzi dan Ibu Siti Kholifah, pembina Pramuka sekolah.</p>
                
                <p>"Kami sangat bangga dengan pencapaian anak-anak," ungkap Bapak Hasan Basri, Kepala MI Roudlotul Huda. "Kemenangan ini membuktikan bahwa dengan kerja keras dan semangat gotong royong, siswa-siswi kami mampu bersaing dan berprestasi di tingkat kecamatan."</p>
                
                <p>Salah satu anggota tim, Zahra Amalia, siswi kelas 6, menyatakan bahwa kekompakan tim menjadi kunci kemenangan mereka. "Kami berlatih keras setiap Jumat dan Sabtu. Semua anggota tim saling mendukung dan membantu satu sama lain," jelasnya dengan penuh semangat.</p>
                
                <p>Dengan kemenangan ini, tim Pramuka MI Roudlotul Huda akan mewakili kecamatan dalam perlombaan Pramuka tingkat kabupaten yang akan diselenggarakan bulan depan. Kepala sekolah berjanji akan memberikan dukungan penuh untuk persiapan tim menghadapi kompetisi yang lebih besar.</p>
                
                <p>Prestasi ini menambah deretan keberhasilan MI Roudlotul Huda dalam berbagai kompetisi ekstrakurikuler. Tahun lalu, sekolah ini juga berhasil meraih juara dalam lomba cerdas cermat tingkat kabupaten, membuktikan komitmen sekolah dalam mengembangkan potensi siswa di berbagai bidang.</p>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-left">
                    <div class="footer-title">MI ROUDLOTUL HUDA WEDORO KLURAK</div>
                    <div class="footer-address">
                        Alamat: Desa Wedoro Klurak RT 09 RW 02<br>
                        Candi Sidoarjo, Jawa Timur, Indonesia
                    </div>
                </div>
                <div class="footer-right">
                    <div class="footer-social">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="footer-title">Jam Operasional</div>
                    <div class="footer-hours">
                        <p>Senin - Jumat: 07:00 - 17:00</p>
                        <p>Sabtu - Minggu: 08:00 - 15:00</p>
                    </div>
                    <div class="footer-contact">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                            +62 123 456
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>