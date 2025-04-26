@extends('layouts.app')

@section('content')
<div class="hero" id="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">PT. ABIDIN JAYA TEKNIK</h1>
        <p class="hero-subtitle">PT. Abidin Jaya Teknik sebuah perusahaan yang bergerak di bidang pemasaran</p>
        <a href="/catalog" class="btn hero-button">PRODUK KAMI</a>
    </div>
</div>

<div class="container product-section" id="product-section">
    <div class="product-header">
        <h2 class="product-title">PRODUK KAMI</h2>
        <a href="/catalog" class="view-all product-view-all">View all <i class="fas fa-arrow-right"></i></a>
    </div>
    <div class="row product-grid">
        @forelse($products->take(4) as $product)
        <div class="col-lg-3 col-md-6 col-sm-12 product-item mb-4">
            <div class="product-card">
                @if($product->images->first())
                <img src="{{ $product->images->first()->image_path }}" alt="{{ $product->name }}">
                @else
                <img src="https://via.placeholder.com/200" alt="No Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-location">{{ $product->location ?? 'Unknown Location' }}</p>
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

<div class="container tentang-kami-section" id="tentang-kami-section">
    <div class="product-header">
        <h2>TENTANG KAMI</h2>
        <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 mb-4">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a sapien justo. Nulla facilisis
                tristique imperdiet. Nullam a placerat odio. Sed in ex augue. Aliquam porta consectetur lorem sit amet
                ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
        </div>
        <div class="col-lg-6 col-md-12">
            <img src="https://polstore.co.uk/wp-content/uploads/2020/05/2023_edwards_roller-shutter_engineering_001-1024x768.jpg" class="tentang-kami-img" alt="Tentang Kami">
        </div>
    </div>
</div>
@endsection
