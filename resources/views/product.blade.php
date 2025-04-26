@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="product-section">{{ $product->name }}</h2>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 mb-4">
            <div id="productCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @forelse($product->images as $index => $image)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ $image->image_path }}" class="d-block w-100 product-carousel-img" alt="{{ $product->name }}">
                    </div>
                    @empty
                    <div class="carousel-item active">
                        <img src="https://via.placeholder.com/400" class="d-block w-100 product-carousel-img" alt="No Image">
                    </div>
                    @endforelse
                </div>
                <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <h4>Jenis: {{ $product->type }}</h4>
            <h4>Harga: Rp {{ number_format($product->price, 2) }}</h4>
            <h4 class="mt-4">Spesifikasi:</h4>
            <ul>
                @forelse($product->specifications as $spec)
                <li>{{ $spec->spec_key }}: {{ $spec->spec_value }}</li>
                @empty
                <li>Tidak ada spesifikasi tersedia.</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection