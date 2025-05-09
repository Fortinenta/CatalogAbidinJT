@extends('layouts.app')

@section('content')
    <div class="hero" id="hero-section" data-aos="fade-up">
        <div class="hero-content">
            <h1 class="hero-title">PT. ABIDIN JAYA TEKNIK</h1>
            <p class="hero-subtitle">Penyedia material teknik terpercaya untuk proyek Anda</p>
            <a href="/catalog" class="hero-button"><i class="fas fa-shopping-cart"></i> LIHAT PRODUK</a>
        </div>
    </div>

    <div class="container product-section" id="product-section" data-aos="fade-up">
        <div class="product-header">
            <h2 class="product-title">PRODUK KAMI</h2>
            <a href="/catalog" class="product-view-all">Lihat Semua <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="product-grid">
            @forelse($products->take(4) as $product)
                <div class="product-card" data-aos="flip-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <a href="{{ route('catalog.show', $product->id) }}" class="product-image-wrapper">
                        @if ($product->images->first())
                            <img src="{{ $product->images->first()->image_path }}" alt="{{ $product->name }}"
                                class="product-image" loading="lazy" sizes="(max-width: 600px) 100vw, 280px">
                        @else
                            <img src="https://via.placeholder.com/200" alt="No Image" class="product-image" loading="lazy"
                                sizes="(max-width: 600px) 100vw, 280px">
                        @endif
                        <div class="image-overlay">
                            <span class="overlay-text">{{ $product->name }}</span>
                        </div>
                    </a>
                    <div class="product-info">
                        <h3 class="product-name">{{ $product->name }}</h3>
                        <p class="product-type">{{ ucfirst($product->type) }}</p>
                        <a href="{{ route('catalog.show', $product->id) }}" class="product-button">Lihat Detail</a>
                    </div>
                </div>
            @empty
                <div class="no-products-message">
                    <p>Tidak ada produk untuk ditampilkan.</p>
                </div>
            @endforelse
        </div>
    </div>

    <div class="who-we-are-section" data-aos="fade-up">
        <div class="container">
            <h2 class="who-we-are-title">SIAPA KAMI</h2>
            <p class="who-we-are-subtitle">
                PT. Jaya Abidin Jaya Teknik adalah penyedia material teknis untuk proyek kelistrikan, telekomunikasi, dan
                infrastruktur industri.
            </p>
            <div class="who-we-are-grid">
                <div class="who-we-are-card">
                    <i class="fas fa-tools"></i>
                    <h3 class="who-we-are-card-title">Keahlian Teknis</h3>
                    <p class="who-we-are-card-text">
                        Menyediakan produk galvanis berkualitas seperti cross arm dan baut sesuai standar nasional.
                    </p>
                </div>
                <div class="who-we-are-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3 class="who-we-are-card-title">Keandalan Terpercaya</h3>
                    <p class="who-we-are-card-text">
                        Mitra terpercaya untuk PLN, Telkom, dan Pertamina dengan pengiriman tepat waktu.
                    </p>
                </div>
                <div class="who-we-are-card">
                    <i class="fas fa-lightbulb"></i>
                    <h3 class="who-we-are-card-title">Solusi Inovatif</h3>
                    <p class="who-we-are-card-text">
                        Menawarkan solusi teknis yang presisi dan supplying tahan lama untuk kebutuhan industri.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container tentang-kami-section" id="tentang-kami-section" data-aos="fade-up">
        <div class="tentang-kami-header">
            <h2 class="tentang-kami-title">TENTANG KAMI</h2>
            <a href="{{ route('about') }}" class="tentang-kami-read-more">Baca Selengkapnya <i
                    class="fas fa-arrow-right"></i></a>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="tentang-kami-content">
                    <p>
                        PT. Jaya Abidin Jaya Teknik adalah perusahaan nasional yang menyediakan alat-alat teknik dan
                        material konstruksi untuk proyek kelistrikan, telekomunikasi, dan industri lainnya. Kami berkomitmen
                        pada mutu dan profesionalisme, melayani klien seperti PLN, Telkom, dan Pertamina, dengan produk
                        galvanis seperti cross arm, arm tie, dan baut.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3"
                    class="tentang-kami-img" alt="Tentang Kami" loading="lazy" sizes="(max-width: 600px) 100vw, 500px">
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        /* Product Section */
        .product-section {
            padding: 6rem 0;
            padding-left: 10px;
            padding-right: 10px;
            background: transparent;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .product-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 2.5rem;
            color: #2E7D32;
            text-transform: uppercase;
        }

        .product-view-all {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            color: #4CAF50;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .product-view-all i {
            margin-left: 8px;
        }

        .product-view-all:hover {
            color: #66BB6A;
            transform: translateX(5px);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            padding: 1.5rem 0;
        }

        .product-card {
            background: #fff;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1), 0 0 15px rgba(46, 125, 50, 0.2);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-8px) rotate(1deg);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15), 0 0 20px rgba(46, 125, 50, 0.3);
        }

        .product-image-wrapper {
            position: relative;
            display: block;
            overflow: hidden;
        }

        .product-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.1);
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(46, 125, 50, 0.6), rgba(76, 175, 80, 0.3));
            opacity: 0;
            transition: opacity 0.4s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-card:hover .image-overlay {
            opacity: 1;
        }

        .overlay-text {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: #fff;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
            text-transform: uppercase;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .product-card:hover .overlay-text {
            opacity: 1;
        }

        .product-info {
            padding: 2rem;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .product-name {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 1.4rem;
            color: #2E7D32;
            margin: 0;
            text-transform: uppercase;
        }

        .product-type {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 1rem;
            color: #666;
            margin: 0;
            text-transform: capitalize;
        }

        .product-button {
            background: linear-gradient(90deg, #4CAF50, #66BB6A);
            color: #fff;
            padding: 12px 25px;
            border-radius: 25px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            text-transform: uppercase;
            transition: background 0.3s ease, transform 0.3s ease;
            margin-top: auto;
        }

        .product-button:hover {
            background: linear-gradient(90deg, #66BB6A, #4CAF50);
            transform: scale(1.05);
        }

        .no-products-message {
            grid-column: 1 / -1;
            text-align: center;
            padding: 3rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .no-products-message p {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 1.3rem;
            color: #666;
        }

        /* Who We Are Section */
        .who-we-are-section {
            padding: 6rem 0;
            background: #F5F6F5;
        }

        /* Tentang Kami Section */
        .tentang-kami-section {
            padding: 6rem 0;
            background: transparent;
        }

        /* Responsive Styles */
        @media (max-width: 991.98px) {

            .product-section,
            .who-we-are-section,
            .tentang-kami-section {
                padding: 4rem 0;
                padding-left: 10px;
                padding-right: 10px;
            }

            .product-title {
                font-size: 2.2rem;
            }

            .product-view-all {
                font-size: 0.9rem;
            }

            .product-image {
                height: 200px;
            }

            .product-name {
                font-size: 1.2rem;
            }

            .product-type {
                font-size: 0.9rem;
            }

            .product-button {
                font-size: 0.9rem;
                padding: 10px 20px;
            }

            .who-we-are-title,
            .tentang-kami-title {
                font-size: 2.2rem;
            }

            .who-we-are-subtitle {
                font-size: 1rem;
            }
        }

        @media (max-width: 767.98px) {

            .product-section,
            .who-we-are-section,
            .tentang-kami-section {
                padding: 3rem 0;
                padding-left: 10px;
                padding-right: 10px;
            }

            .product-title {
                font-size: 1.8rem;
            }

            .product-view-all {
                font-size: 0.85rem;
            }

            .product-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .product-image {
                height: 180px;
            }

            .product-name {
                font-size: 1.1rem;
            }

            .product-type {
                font-size: 0.85rem;
            }

            .product-button {
                font-size: 0.85rem;
            }

            .who-we-are-title,
            .tentang-kami-title {
                font-size: 1.8rem;
            }

            .who-we-are-subtitle {
                font-size: 0.9rem;
                text-align: justify; 
            }

            .who-we-are-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
        }

        @media (max-width: 575.98px) {

            .product-section,
            .who-we-are-section,
            .tentang-kami-section {
                padding: 2.5rem 0;
                padding-left: 10px;
                padding-right: 10px;

            }

            .product-title {
                font-size: 1.6rem;
            }

            .product-image {
                height: 160px;
            }

            .who-we-are-title,
            .tentang-kami-title {
                font-size: 1.6rem;
            }

            .who-we-are-subtitle {
                font-size: 0.85rem;
                text-align: justify; 
            }
        }
    </style>
@endsection

@section('scripts')
    @include('layouts.components.navbar-script')
@endsection
