<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI Roudlotul Huda Wedoro Klurak</title>
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
        }
        
        /* Header Styles */
        .header-top {
            background-color: #4CAF50;
            color: white;
            padding: 8px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .contact-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .contact-info i {
            margin-right: 5px;
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
        
        .nav-button {
            background-color: #FF8C00;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        
        /* Hero Section */
        .hero {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('/api/placeholder/800/400');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 60px 5%;
            text-align: left;
            margin-bottom: 20px;
        }
        
        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .hero p {
            font-size: 1rem;
            margin-bottom: 20px;
            max-width: 600px;
        }
        
        .hero-button {
            background-color: #FF8C00;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
        
        /* Sambutan Section */
        .sambutan {
            background-color: #4CAF50;
            padding: 20px 5%;
            margin: 20px 0;
            color: white;
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .sambutan-img {
            flex: 0 0 200px;
        }
        
        .sambutan-img img {
            width: 100%;
            border-radius: 5px;
        }
        
        .sambutan-text {
            flex: 1;
        }
        
        .sambutan-text h2 {
            margin-bottom: 15px;
        }
        
        .sambutan-text p {
            margin-bottom: 10px;
            line-height: 1.6;
        }
        
        .nama-kepala {
            background-color: #FF8C00;
            padding: 10px;
            text-align: center;
            margin-top: 10px;
            border-radius: 5px;
        }
        
        /* News and Achievement Container */
        .news-achievement-container {
            display: flex;
            padding: 20px 5%;
            gap: 30px;
        }
        
        /* News Section */
        .news-section {
            flex: 0 0 65%;
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .section-title {
            color: #4CAF50;
            border-left: 5px solid #4CAF50;
            padding-left: 10px;
        }
        
        .news-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        .news-item {
            background-color: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .news-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        
        .news-content {
            padding: 15px;
        }
        
        .news-date {
            color: #777;
            font-size: 0.8rem;
            margin-bottom: 5px;
        }
        
        .news-title {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }
        
        .news-excerpt {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 15px;
        }
        
        .read-more {
            background-color: #FF8C00;
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 0.8rem;
            display: inline-block;
        }
        
        .featured-news {
            grid-column: 1;
            grid-row: 1 / span 2;
        }
        
        .featured-news img {
            height: 250px;
        }
        
        .category-tag {
            display: inline-block;
            padding: 3px 8px;
            font-size: 0.7rem;
            color: white;
            border-radius: 3px;
            margin-bottom: 5px;
        }
        
        .category-pramuka {
            background-color: #28a745;
        }
        
        .category-olahraga {
            background-color: #17a2b8;
        }
        
        .category-kegiatan {
            background-color: #dc3545;
        }
        
        .category-akademik {
            background-color: #6f42c1;
        }
        
        /* Achievement Section */
        .achievement-section {
            flex: 0 0 30%;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }
        
        .achievement-list {
            list-style-type: none;
        }
        
        .achievement-item {
            background-color: white;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        /* Profile Section */
        .profile-section {
            padding: 40px 5%;
            text-align: center;
        }
        
        .profile-section h2 {
            color: #333;
            margin-bottom: 30px;
        }
        
        .profile-content {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            margin-top: 30px;
        }
        
        .profile-left {
            flex: 0 0 30%;
        }
        
        .vision-card, .mission-card {
            background-color: #FF8C00;
            padding: 20px;
            color: white;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .vision-card h3, .mission-card h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .vision-card p {
            line-height: 1.6;
            text-align: center;
        }
        
        .mission-card ol {
            padding-left: 20px;
            line-height: 1.6;
            text-align: left;
        }
        
        .mission-card li {
            margin-bottom: 10px;
        }
        
        .profile-right {
            flex: 0 0 65%;
            text-align: left;
        }
        
        .profile-right h3 {
            color: #FF8C00;
            margin-bottom: 20px;
        }
        
        .profile-right p {
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        /* Location Section */
        .location-section {
            margin-top: 30px;
        }
        
        .location-section h4 {
            color: #4CAF50;
            margin-bottom: 20px;
        }
        
        .map-container {
            height: 300px;
            background-color: #e9e9e9;
            border-radius: 5px;
            overflow: hidden;
        }
        
        /* Activities Section */
        .activities-section {
            padding: 40px 5%;
            text-align: center;
        }
        
        .activities-section h2 {
            margin-bottom: 30px;
            color: #333;
        }
        
        .activities-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        
        .activity-item {
            text-align: center;
        }
        
        .activity-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        
        .activity-item p {
            font-weight: 500;
        }
        
        /* Footer */
        .footer {
            background-color: #FF8C00;
            color: white;
            padding: 30px 5%;
            margin-top: 40px;
        }
        
        .footer-content {
            display: flex;
            justify-content: space-between;
        }
        
        .footer-left {
            flex: 0 0 45%;
        }
        
        .footer-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .footer-address {
            margin-bottom: 15px;
            line-height: 1.6;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            color: white;
            text-decoration: none;
        }
        
        .footer-right {
            flex: 0 0 45%;
        }
        
        .footer-map {
            height: 200px;
            background-color: #e9e9e9;
            border-radius: 5px;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <!-- Header Top -->
    <div class="header-top">
        <div class="contact-info">
            <span>📞 +62 811 234 5678</span>
            <span>📧 miroudlotulhuda@gmail.com</span>
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
            <button class="nav-button">PPDB</button>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <div class="hero">
        <h4>Selamat Datang di Website</h4>
        <h1>MI ROUDLOTUL HUDA</h1>
        <p>Website ini sebagai sarana informasi dan komunikasi untuk memberikan kemudahan dalam mengakses seluruh informasi seputar kegiatan, prestasi, dan berita yang terjadi, terbaru, dan juga mengedukasi siswa-siswi.</p>
        <a href="#" class="hero-button">PPDB ONLINE</a>
    </div>
    
    <!-- Sambutan Kepala Sekolah -->
    <div class="sambutan">
        <div class="sambutan-img">
            <img src="/images/kepalasekolah.jpg" alt="Kepala Sekolah">
            <div class="nama-kepala">
                Ida Rokhimawati, S.Pd<br>
                MI ROUDLOTUL HUDA
            </div>
        </div>
        <div class="sambutan-text">
            <h2>Sambutan Kepala Sekolah</h2>
            <p>Puji Syukur Kita Panjatkan ke Hadirat Allah SWT, Tuhan Yang Maha Esa. Atas limpahan Rahmat Dan Karunia-Nya sehingga Website Madrasah kami, berupa beranda Infomasi Digital yang berfungsi sebagai salah satu media komunikasi dengan masyarakat telah dapat dipertahankan.</p>
            <p>Selamat Datang di Website MI Roudlotul Huda. Kami berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus dijiwa demi anak bangsa.</p>
            <p>Website MI Roudlotul Huda sebagai sarana publikasi sekolah kami dalam menginformasikan segala kegiatan akademik. Website ini sebagai sarana komunikasi dan informasi bagi siswa, guru, alumni dan masyarakat pada umumnya, semoga dapat menjadikan MI Roudlotul Huda lebih dikenal sebagai rintisan Madrasah Hebat.</p>
            <p>Terima Kasih Kepada semua pihak yang telah berpartisipasi dalam pengembangan website ini dan semoga Allah SWT memberikan kekuatan bagi kita semua untuk mencerdaskan kehidupan dan keberadaban bangsa. Amin.</p>
        </div>
    </div>
    
    <!-- News and Achievement Section -->
    <div class="news-achievement-container">
        <!-- Berita Terkini -->
        <div class="news-section">
            <div class="section-header">
                <h2 class="section-title">Berita Terkini</h2>
                <a href="#" class="read-more">Lihat semua</a>
            </div>
            
            <div class="news-grid">
                <div class="news-item featured-news">
                    <img src="/api/placeholder/400/250" alt="Kegiatan Pramuka">
                    <div class="news-content">
                        <span class="category-tag category-pramuka">Pramuka</span>
                        <div class="news-date">📅 24 Agustus 2023</div>
                        <h3 class="news-title">Membanggakan, Siswa siswi memenangkan lomba pramuka.</h3>
                        <p class="news-excerpt">Prestasi membanggakan kembali diraih oleh siswa-siswi MI Roudlotul Huda dalam lomba kepramukaan tingkat kecamatan.</p>
                        <a href="#" class="read-more">Selengkapnya</a>
                    </div>
                </div>
                
                <div class="news-item">
                    <img src="/api/placeholder/300/150" alt="Kegiatan Olahraga">
                    <div class="news-content">
                        <span class="category-tag category-olahraga">Olahraga</span>
                        <div class="news-date">📅 18 Juli 2023</div>
                        <h3 class="news-title">Acara Senam bersama untuk tingkatkan kesehatan jasmani dan rohani</h3>
                        <p class="news-excerpt">Kegiatan senam pagi yang diadakan setiap hari Jumat...</p>
                        <a href="#" class="read-more">Selengkapnya</a>
                    </div>
                </div>
                
                <div class="news-item">
                    <img src="/api/placeholder/300/150" alt="Kegiatan Belajar">
                    <div class="news-content">
                        <span class="category-tag category-kegiatan">Kegiatan</span>
                        <div class="news-date">📅 5 Juni 2023</div>
                        <h3 class="news-title">MI Roudlotul Huda mengadakan pelatihan literasi bagi siswa kelas lima</h3>
                        <p class="news-excerpt">Program peningkatan literasi untuk mendukung kemampuan membaca dan menulis...</p>
                        <a href="#" class="read-more">Selengkapnya</a>
                    </div>
                </div>
                
                <div class="news-item">
                    <img src="/api/placeholder/300/150" alt="Kegiatan Akademik">
                    <div class="news-content">
                        <span class="category-tag category-akademik">Akademik</span>
                        <div class="news-date">📅 20 Mei 2023</div>
                        <h3 class="news-title">Ujian Akhir Semester genap telah dilaksanakan dengan lancar</h3>
                        <p class="news-excerpt">Pelaksanaan ujian akhir semester genap berjalan dengan tertib...</p>
                        <a href="#" class="read-more">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Achievement Section -->
        <div class="achievement-section">
            <div class="section-header">
                <h2 class="section-title">Prestasi Baru Ini</h2>
            </div>
            
            <ul class="achievement-list">
                <li class="achievement-item">Juara Lomba Vokal Senjati Agustus 2023 WEDORO KLURAK</li>
                <li class="achievement-item">Pengumuman Pemenang Penulisan Pelopor 2022</li>
                <li class="achievement-item">Juara Lomba Pidato Februari</li>
                <li class="achievement-item">Juara Lomba Mewarnai Maret 2023</li>
                <li class="achievement-item">Juara Lomba Pramuka Maret 2023</li>
            </ul>
        </div>
    </div>
    
    <!-- Profile Section -->
    <div class="profile-section">
        <h2>Profile Sekolah</h2>
        
        <div class="profile-content">
            <div class="profile-left">
                <div class="vision-card">
                    <h3>Visi<br>MI Roudlotul Huda</h3>
                    <p>Mewujudkan Siswa - Siswai Madrasah Ibtidaiyah Yang Inklusif, Gender Responsive Berbasis Islam</p>
                </div>
                
                <div class="mission-card">
                    <h3>Misi<br>MI Roudlotul Huda</h3>
                    <ol>
                        <li>Menjalankan Peserta Didik Yang Berprestasi</li>
                        <li>Menjadikan Peserta Didik Yang Memiliki Ilmu Pengetahuan Umum Dan Agama</li>
                        <li>Menjadikan Peserta Didik Yang Mempunyai Akhlak Yang Mulia</li>
                        <li>Menjadikan Hak Didik Mendapatkan Hak Yang Sama Untuk Meningkatkan Potensi Dirinya</li>
                        <li>Menjadikan Madrasah Sebagai Pusat Dakwah Islam</li>
                        <li>Mendorong Dan Mengantisipasi Peserta Didik Untuk Berkembang Secara Maksimal Yang Meliputi Aspek Intelektual, Sosial, Religi, Emosi Dan Fisik</li>
                    </ol>
                </div>
            </div>
            
            <div class="profile-right">
                <h3>MI ROUDLOTUL HUDA</h3>
                <h4>Deskripsi Sekolah</h4>
                
                <p>Sekolah adalah tempat belajar dan mengembangkan diri, baik dalam bidang akademis maupun karakter. Di sekolah, siswa dibimbing oleh guru untuk menjadi pribadi yang cerdas, berakhlak, dan siap menghadapi masa depan. Dengan fasilitas yang memadai dan lingkungan yang mendukung, sekolah menjadi wadah tumbuh kembang generasi penerus bangsa.</p>
                
                <div class="location-section">
                    <h4>Lokasi MI Roudlotul Huda</h4>
                    <div class="map-container">
                    <a href="https://maps.app.goo.gl/GXGbhuRiG6ThPVjm8" target="_blank">
                        <img src="/images/mapsmiruha.jpg" alt="Peta Lokasi" style="width: 100%; height: 100%; object-fit: cover;">
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Activities Section -->
    <div class="activities-section">
        <h2>Kegiatan Dan Ekstra Kurikuler</h2>
        
        <div class="activities-grid">
            <div class="activity-item">
                <img src="/images/melukis.png" alt="Maulids">
                <p>Melukis</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/pramukamiruha.jpg" alt="Pramuka">
                <p>Pramuka</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/berenang.png" alt="Renang">
                <p>Berenang</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/bhsinggris.png" alt="Bahasa Inggris">
                <p>Bahasa Inggris</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/banjari.png" alt="Seni Tari">
                <p>Banjari</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/btq.png" alt="Baca Tulis Qur'an">
                <p>Baca Tulis Qur'an</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/outdoorlearning.png" alt="Outdoor Learning">
                <p>Outdoor Learning</p>
            </div>
            
            <div class="activity-item">
                <img src="/images/pencaksilat.png" alt="Pencak Silat">
                <p>Pencak Silat</p>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-left">
                <div class="footer-title">MI ROUDLOTUL HUDA WEDORO KLURAK</div>
                <div class="footer-address">
                    Alamat: Desa Wedoro Kulon RT 03 RW 02<br>
                    Candi Sidoarjo, Jawa Timur, Indonesia
                </div>
                
                <div class="social-links">
                    <a href="#"><span>📱 WhatsApp</span></a>
                </div>
                <div class="social-links">
                    <a href="#"><span>📘 miroudlotulhuda</span></a>
                </div>
                <div class="social-links">
                    <a href="#"><span>📷 @miroudlotulhuda</span></a>
                </div>
                <div class="social-links">
                    <a href="#"><span>📞 031 123 456</span></a>
                </div>
            </div>
            
            <div class="footer-right">
                <div class="footer-map">
                    <a href="https://maps.app.goo.gl/GXGbhuRiG6ThPVjm8" target="_blank">
                    <img src="/images/mapsmiruha.jpg" alt="Peta Lokasi" style="width: 100%; height: 100%; object-fit: cover;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>