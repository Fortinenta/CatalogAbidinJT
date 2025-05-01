@extends('layouts.app')

@section('content')
<div class="hero" id="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">PT. ABIDIN JAYA TEHNIK</h1>
        <p class="hero-subtitle">PT. Abidin Jaya Tehnik sebuah perusahaan yang bergerak di bidang pemasaran</p>
        <a href="/catalog" class="hero-button"><i class="fas fa-shopping-cart"></i> PRODUK KAMI</a>
    </div>
</div>

<div class="container product-section" id="product-section">
    <div class="product-header">
        <h2 class="product-title">PRODUK KAMI</h2>
        <a href="/catalog" class="product-view-all">View all <i class="fas fa-arrow-right"></i></a>
    </div>
    <div class="product-grid">
        @forelse($products->take(4) as $product)
        <div class="product-item">
            <div class="product-card">
                @if($product->images->first())
                <img src="{{ $product->images->first()->image_path }}" alt="{{ $product->name }}">
                @else
                <img src="https://via.placeholder.com/200" alt="No Image">
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

<div class="container tentang-kami-section" id="tentang-kami-section">
    <div class="tentang-kami-header">
        <h2 class="tentang-kami-title">TENTANG KAMI</h2>
        <a href="#" class="tentang-kami-read-more">Read more <i class="fas fa-arrow-right"></i></a>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="tentang-kami-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a sapien justo. Nulla facilisis tristique imperdiet. Nullam a placerat odio. Sed in ex augue. Aliquam porta consectetur lorem sit amet ultricies. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3" class="tentang-kami-img" alt="Tentang Kami">
        </div>
    </div>
</div>
@endsection