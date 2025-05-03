@extends('layouts.app')

@section('content')
<div class="about-header-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                {{-- <h5 class="section-label" data-aos="fade-right">~ TENTANG KAMI</h5> --}}
                <h2 class="about-title" data-aos="fade-up">SOLUSI MATERIAL TEKNIK TERBAIK</h2>
                <p class="about-description" data-aos="fade-up" data-aos-delay="200">
                    PT. Jaya Abidin Jaya Teknik menyediakan material teknik berkualitas untuk proyek kelistrikan, telekomunikasi, dan infrastruktur industri, dengan komitmen pada profesionalisme dan keandalan.
                </p>
                <div class="highlight-points">
                    <div class="highlight-item" data-aos="fade-up" data-aos-delay="300">
                        <i class="fas fa-rocket"></i>
                        <div>
                            <h4>Keahlian Teknis</h4>
                            <p>Produk galvanis berkualitas seperti cross arm dan baut double arming yang memenuhi standar nasional.</p>
                        </div>
                    </div>
                    <div class="highlight-item" data-aos="fade-up" data-aos-delay="400">
                        <i class="fas fa-lightbulb"></i>
                        <div>
                            <h4>Keandalan Terpercaya</h4>
                            <p>Mitra terpercaya bagi PLN, Telkom, dan Pertamina dengan pengiriman tepat waktu.</p>
                        </div>
                    </div>
                </div>
                <a href="#hubungi-kami" class="cta-button" data-aos="zoom-in" data-aos-delay="500">HUBUNGI KAMI</a>
            </div>
            <div class="col-lg-6 col-md-12 text-center">
                <div class="header-image-wrapper" data-aos="fade-left">
                    <img src="https://www.hashmicro.com/id/blog/wp-content/uploads/2024/03/Kategori-Peralatan-Material-Handling-1024x585.jpg" alt="Proyek Industri" class="header-image">
                    <div class="help-box">
                        <p class="help-title">Butuh Bantuan?</p>
                        <p class="help-text">Kami siap membantu kebutuhan proyek Anda. Hubungi kami sekarang!</p>
                        <a href="#hubungi-kami" class="help-link">HUBUNGI KAMI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container tentang-kami-section" data-aos="fade-up">
    <div class="row align-items-stretch">
        <div class="col-lg-6 col-md-12">
            <div class="tentang-kami-content">
                <p>
                    PT. Jaya Abidin Jaya Teknik adalah perusahaan nasional yang berdedikasi menyediakan material teknik dan alat konstruksi untuk proyek kelistrikan, telekomunikasi, serta infrastruktur industri. Dengan komitmen pada kualitas dan profesionalisme, kami melayani klien strategis seperti PLN, Telkom, dan Pertamina. Produk unggulan kami mencakup material galvanis seperti cross arm, arm tie, baut double arming, dan klem penghalang panjat, yang semuanya dilapisi dengan Hotdeep Galvanized untuk ketahanan terhadap korosi.
                </p>
                <p>
                    Didukung oleh tenaga ahli berpengalaman dan sistem produksi yang efisien, kami menjamin pengiriman tepat waktu serta solusi yang presisi dan tahan lama sesuai standar nasional. Keandalan kami telah terbukti melalui kerja sama jangka panjang dengan berbagai pihak industri ternama.
                </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <h2 class="tentang-kami-title">TENTANG KAMI</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://i0.wp.com/www.dunia-energi.com/wp-content/uploads/2018/10/0810-PLN.jpg?resize=960%2C540&ssl=1" alt="Proyek Kelistrikan" loading="lazy" onerror="this.onerror=null; this.parentElement.classList.add('gallery-fallback');">
                    <div class="gallery-overlay">
                        <p class="gallery-text">Proyek Kelistrikan</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://kpssteel.com/storage/2021/05/Copy-of-Copy-of-Copy-of-Untitled-Design-4.png" alt="Material Galvanis" loading="lazy" onerror="this.onerror=null; this.parentElement.classList.add('gallery-fallback');">
                    <div class="gallery-overlay">
                        <p class="gallery-text">Material Galvanis</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://i0.wp.com/geloraperkasa.com/wp-content/uploads/2023/06/jenis-saluran-telekomunikasi.jpg" alt="Infrastruktur Telekomunikasi" loading="lazy" onerror="this.onerror=null; this.parentElement.classList.add('gallery-fallback');">
                    <div class="gallery-overlay">
                        <p class="gallery-text">Infrastruktur Telekomunikasi</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://www.stabilitas.id/wp-content/uploads/Gambar-Utama-Dekoruma.webp" alt="Konstruksi Industri" loading="lazy" onerror="this.onerror=null; this.parentElement.classList.add('gallery-fallback');">
                    <div class="gallery-overlay">
                        <p class="gallery-text">Konstruksi Industri</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="who-we-are-section" data-aos="fade-up">
    <div class="container">
        <div class="who-we-are-grid">
            <div class="who-we-are-card">
                <i class="fas fa-rocket fa-3x"></i>
                <h3 class="who-we-are-card-title">KEAHLIAN TEKNIS</h3>
                <p class="who-we-are-card-text">
                    Menyediakan produk galvanis berkualitas seperti cross arm, arm tie, dan baut double arming yang memenuhi standar nasional.
                </p>
            </div>
            <div class="who-we-are-card">
                <i class="fas fa-lightbulb fa-3x"></i>
                <h3 class="who-we-are-card-title">KEANDALAN TERPERCAYA</h3>
                <p class="who-we-are-card-text">
                    Mitra terpercaya bagi PLN, Telkom, dan Pertamina dengan pengiriman tepat waktu dan layanan profesional.
                </p>
            </div>
            <div class="who-we-are-card">
                <i class="fas fa-compass fa-3x"></i>
                <h3 class="who-we-are-card-title">SOLUSI INOVATIF</h3>
                <p class="who-we-are-card-text">
                    Memberikan solusi teknis yang presisi dan tahan lama untuk mendukung kebutuhan proyek industri Anda.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="testimonial-section" data-aos="fade-up">
    <div class="container">
        <h2 class="testimonial-title">APA KATA KLIEN KAMI</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="testimonial-card">
                    <p class="testimonial-text">
                        "PT. Jaya Abidin Jaya Teknik selalu memberikan produk berkualitas tinggi dan pengiriman yang tepat waktu. Mitra yang sangat kami andalkan!"
                    </p>
                    <p class="testimonial-author">– Tim Proyek PLN</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="testimonial-card">
                    <p class="testimonial-text">
                        "Produk galvanis mereka sangat tahan lama dan sesuai dengan kebutuhan proyek kami. Pelayanan yang sangat profesional!"
                    </p>
                    <p class="testimonial-author">– Manajer Proyek Telkom</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="testimonial-card">
                    <p class="testimonial-text">
                        "Solusi yang mereka berikan sangat membantu dalam menyelesaikan proyek kami dengan efisien. Sangat direkomendasikan!"
                    </p>
                    <p class="testimonial-author">– Departemen Teknik Pertamina</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Bagian Header Tentang Kami */
    .about-header-section {
        background: #A3E4D7;
        padding: 150px 0 100px; /* Penyesuaian padding atas untuk navbar */
        position: relative;
    }

    .section-label {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        color: #FFD700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 1rem;
    }

    .about-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        font-size: 2.5rem;
        color: #2E7D32;
        text-transform: uppercase;
        margin-bottom: 1.5rem;
    }

    .about-description {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .highlight-points {
        margin-bottom: 2rem;
    }

    .highlight-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
    }

    .highlight-item i {
        color: #4CAF50;
        font-size: 2rem;
        margin-right: 1rem;
    }

    .highlight-item h4 {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        color: #2E7D32;
        margin-bottom: 0.5rem;
    }

    .highlight-item p {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 0.9rem;
        color: #666;
        margin: 0;
    }

    .cta-button {
        background: linear-gradient(90deg, #4CAF50, #66BB6A);
        color: #fff;
        padding: 12px 30px;
        border-radius: 5px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        text-transform: uppercase;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .cta-button:hover {
        background: linear-gradient(90deg, #66BB6A, #4CAF50);
        transform: scale(1.05);
        color: #fff;
    }

    .header-image-wrapper {
        position: relative;
        text-align: center;
    }

    .header-image {
        width: 100%;
        max-width: 400px;
        height: auto;
        border-radius: 20px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .help-box {
        background: #fff;
        border-radius: 10px;
        padding: 1rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        position: absolute;
        bottom: -30px;
        right: 20px;
        width: 250px;
        text-align: left;
    }

    .help-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        color: #2E7D32;
        margin-bottom: 0.5rem;
    }

    .help-text {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 0.8rem;
        color: #666;
        margin-bottom: 0.5rem;
    }

    .help-link {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 0.8rem;
        color: #4CAF50;
        text-transform: uppercase;
    }

    .help-link:hover {
        color: #2E7D32;
    }

    /* Bagian Tentang Kami */
    .tentang-kami-section {
        padding: 5rem 0;
        background: transparent;
    }

    .tentang-kami-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 2.5rem;
        color: #2E7D32;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 2rem;
    }

    .tentang-kami-content {
        min-height: 450px; /* Sesuaikan dengan tinggi galeri */
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .tentang-kami-content p {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 1.1rem;
        color: #333;
        line-height: 1.8;
        margin-bottom: 1rem;
    }

    /* Galeri Gambar */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        min-height: 450px; /* Sesuaikan dengan tinggi deskripsi */
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        transition: transform 0.3s ease;
        background: #e0e0e0; /* Placeholder saat gambar belum terload */
    }

    .gallery-item img {
        width: 100%;
        height: 200px; /* Tinggi gambar disesuaikan agar sejajar */
        object-fit: cover;
        display: block;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-text {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 0.9rem;
        color: #fff;
        text-align: center;
        text-transform: uppercase;
    }

    .gallery-fallback::after {
        content: "Gambar Tidak Tersedia";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family: 'Inter', sans-serif;
        font-size: 0.9rem;
        color: #666;
        text-align: center;
    }

    /* Bagian Siapa Kami */
    .who-we-are-section {
        padding: 5rem 0;
        background: #F5F6F5;
    }

    .who-we-are-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }

    .who-we-are-card {
        background: #fff;
        border-radius: 15px;
        padding: 2rem;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .who-we-are-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .who-we-are-card i {
        color: #4CAF50;
        margin-bottom: 1.5rem;
        transition: transform 0.3s ease;
    }

    .who-we-are-card:hover i {
        transform: scale(1.2);
    }

    .who-we-are-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, #4CAF50, #66BB6A);
    }

    .who-we-are-card-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 1.5rem;
        color: #2E7D32;
        margin-bottom: 1rem;
        text-transform: uppercase;
    }

    .who-we-are-card-text {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 1rem;
        color: #666;
    }

    /* Bagian Testimonial */
    .testimonial-section {
        padding: 2rem 0;
        background: #fff;
    }

    .testimonial-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 2.5rem;
        color: #2E7D32;
        text-transform: uppercase;
        text-align: center;
        margin-bottom: 3rem;
    }

    .testimonial-card {
        background: #F5F6F5;
        border-radius: 15px;
        padding: 2rem;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .testimonial-text {
        font-family: 'Inter', sans-serif;
        font-style: italic;
        font-size: 1rem;
        color: #333;
        margin-bottom: 1rem;
    }

    .testimonial-author {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 0.9rem;
        color: #4CAF50;
    }

    /* Responsivitas */
    @media (max-width: 991.98px) {
        .about-header-section {
            padding: 120px 0 80px;
        }

        .about-title {
            font-size: 2rem;
        }

        .about-description {
            font-size: 1rem;
        }

        .header-image {
            max-width: 300px;
        }

        .help-box {
            width: 200px;
            bottom: -20px;
            right: 10px;
        }

        .tentang-kami-content {
            min-height: auto; /* Reset tinggi pada layar kecil */
        }

        .gallery-grid {
            min-height: auto; /* Reset tinggi pada layar kecil */
        }

        .gallery-item img {
            height: 150px;
        }

        .testimonial-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 767.98px) {
        .about-header-section {
            padding: 100px 0 60px;
        }

        .about-title {
            font-size: 1.8rem;
        }

        .about-description {
            font-size: 0.9rem;
        }

        .highlight-item i {
            font-size: 1.5rem;
        }

        .highlight-item h4 {
            font-size: 1rem;
        }

        .highlight-item p {
            font-size: 0.8rem;
        }

        .cta-button {
            padding: 10px 20px;
            font-size: 0.9rem;
        }

        .header-image {
            max-width: 250px;
        }

        .help-box {
            width: 180px;
            bottom: -10px;
            right: 5px;
        }

        .help-title {
            font-size: 0.9rem;
        }

        .help-text {
            font-size: 0.7rem;
        }

        .help-link {
            font-size: 0.7rem;
        }

        .tentang-kami-title {
            font-size: 2rem;
        }

        .gallery-item img {
            height: 120px;
        }

        .gallery-text {
            font-size: 0.8rem;
        }

        .who-we-are-card-title {
            font-size: 1.3rem;
        }

        .who-we-are-card-text {
            font-size: 0.9rem;
        }

        .testimonial-title {
            font-size: 1.8rem;
        }
    }
</style>
@endsection