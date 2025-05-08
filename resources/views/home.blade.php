@extends('layouts.app')

@section('content')
<div class="hero" id="hero-section" data-aos="fade-up">
    <div class="hero-content">
        <h1 class="hero-title">PT. ABIDIN JAYA TEHNIK</h1>
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
        <div class="product-item">
            <div class="product-card">
                @if($product->images->first())
                <img src="{{ $product->images->first()->image_path }}" alt="{{ $product->name }}">
                @else
                <img src="https://via.placeholder.com/200" alt="Gambar Tidak Tersedia">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-type">{{ $product->type }}</p>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <p class="text-center">Tidak ada produk untuk ditampilkan.</p>
        </div>
        @endforelse
    </div>
</div>

<div class="who-we-are-section" data-aos="fade-up">
    <div class="container">
        <h2 class="who-we-are-title">SIAPA KAMI</h2>
        <p class="who-we-are-subtitle">
            PT. Jaya Abidin Jaya Teknik adalah penyedia material teknis untuk proyek kelistrikan, telekomunikasi, dan infrastruktur industri.
        </p>
        <div class="who-we-are-grid">
            <div class="who-we-are-card">
                <i class="fas fa-tools fa-3x"></i>
                <h3 class="who-we-are-card-title">Keahlian Teknis</h3>
                <p class="who-we-are-card-text">
                    Menyediakan produk galvanis berkualitas seperti cross arm dan baut sesuai standar nasional.
                </p>
            </div>
            <div class="who-we-are-card">
                <i class="fas fa-shield-alt fa-3x"></i>
                <h3 class="who-we-are-card-title">Keandalan Terpercaya</h3>
                <p class="who-we-are-card-text">
                    Mitra terpercaya untuk PLN, Telkom, dan Pertamina dengan pengiriman tepat waktu.
                </p>
            </div>
            <div class="who-we-are-card">
                <i class="fas fa-lightbulb fa-3x"></i>
                <h3 class="who-we-are-card-title">Solusi Inovatif</h3>
                <p class="who-we-are-card-text">
                    Menawarkan solusi teknis yang presisi dan tahan lama untuk kebutuhan industri.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container tentang-kami-section" id="tentang-kami-section" data-aos="fade-up">
    <div class="tentang-kami-header">
        <h2 class="tentang-kami-title">TENTANG KAMI</h2>
        <a href="{{ route('about') }}" class="tentang-kami-read-more">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="tentang-kami-content">
                <p>
                    PT. Jaya Abidin Jaya Teknik adalah perusahaan nasional yang menyediakan alat-alat teknik dan material konstruksi untuk proyek kelistrikan, telekomunikasi, dan industri lainnya. Kami berkomitmen pada mutu dan profesionalisme, melayani klien seperti PLN, Telkom, dan Pertamina, dengan produk galvanis seperti cross arm, arm tie, dan baut.
                </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3" class="tentang-kami-img" alt="Tentang Kami">
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @include('layouts.components.navbar-script')
@endsection