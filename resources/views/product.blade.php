@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2>{{ $product->name }}</h2>
    <div class="row">
        <div class="col-md-6">
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @forelse($product->images as $index => $image)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ $image->image_path }}" class="d-block w-100" alt="{{ $product->name }}">
                    </div>
                    @empty
                    <div class="carousel-item active">
                        <img src="https://via.placeholder.com/400" class="d-block w-100" alt="No Image">
                    </div>
                    @endforelse
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-6">
            <h4>Jenis: {{ $product->type }}</h4>
            <h4>Harga: Rp {{ number_format($product->price, 2) }}</h4>
            <h4>Spesifikasi:</h4>
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