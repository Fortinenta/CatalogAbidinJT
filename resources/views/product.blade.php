@extends('layouts.app')

@section('content')
<div class="container product-detail-section my-5">
    <!-- Product Detail -->
    <div class="row align-items-center mb-5">
        <!-- Left Images -->
        <div class="col-lg-2 col-md-3 col-sm-12 mb-4">
            <div class="d-flex flex-column gap-3">
                @forelse($product->images->take(2) as $image)
                <img src="{{ $image->image_path }}" class="w-100 small-product-img" alt="{{ $product->name }}">
                @empty
                <img src="https://via.placeholder.com/100" class="w-100 small-product-img" alt="No Image">
                <img src="https://via.placeholder.com/100" class="w-100 small-product-img" alt="No Image">
                @endforelse
            </div>
        </div>

        <!-- Main Image -->
        <div class="col-lg-4 col-md-3 col-sm-12 mb-4">
            @if($product->images->first())
            <img src="{{ $product->images->first()->image_path }}" class="w-100 main-product-img" alt="{{ $product->name }}">
            @else
            <img src="https://via.placeholder.com/400" class="w-100 main-product-img" alt="No Image">
            @endif
        </div>

        <!-- Product Info -->
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2 class="product-title">{{ $product->name }}</h2>
            <h4 class="spec-title mt-4">Spesifikasi</h4>
            <ul class="spec-list">
                @forelse($product->specifications as $spec)
                <li>{{ $spec->spec_key }}: {{ $spec->spec_value }}</li>
                @empty
                <li>Tidak ada spesifikasi tersedia.</li>
                @endforelse
            </ul>
            <h4 class="info-title mt-4">Jenis</h4>
            <p class="info-text">{{ $product->type }}</p>
            <h4 class="info-title mt-2">Harga</h4>
            <p class="info-text price">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
        </div>
    </div>

    <!-- Related Products -->
    <div class="related-products-section">
        <div class="product-header">
            <h2 class="product-title">Cari Yang Lain?</h2>
        </div>
        <div class="product-grid">
            @forelse($relatedProducts->take(4) as $relatedProduct)
            <div class="product-item">
                <div class="product-card">
                    @if($relatedProduct->images->first())
                    <img src="{{ $relatedProduct->images->first()->image_path }}" alt="{{ $relatedProduct->name }}">
                    @else
                    <img src="https://via.placeholder.com/200" alt="No Image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $relatedProduct->name }}</h5>
                        <p class="card-type">{{ $relatedProduct->type }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center">Tidak ada produk terkait untuk ditampilkan.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection