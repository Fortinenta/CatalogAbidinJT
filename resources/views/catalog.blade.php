@extends('layouts.app')

@section('title', 'Katalog Produk - PT. Abidin Jaya Teknik')

@section('content')
<div class="container product-catalog">
    <h1>Katalog Produk</h1>
    <div class="row">
        @forelse($products as $product)
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="product-card">
                @if($product->images->first())
                <img src="{{ $product->images->first()->image_path }}" alt="{{ $product->name }}">
                @else
                <img src="https://via.placeholder.com/200" alt="No Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-type">{{ $product->type }}</p>  {{-- Tampilkan jenis produk --}}
                    <p class="card-description">{{ $product->description }}</p>
                    <a href="{{ route('catalog.show', $product->id) }}" class="btn hero-button">Lihat Detail</a> {{-- Gunakan class hero-button --}}
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <p class="text-center">Tidak ada produk untuk ditampilkan.</p>
        </div>
        @endforelse
    </div>

    {{ $products->links() }}
</div>
@endsection

@section('scripts')
    <style>
        .product-catalog {
            padding: 50px 0;
            background-color: rgba(255, 255, 255, 0.8); /* Transparansi sedikit */
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08); /* Efek bayangan halus */
        }
        .product-catalog h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .product-card {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s ease; /* Transisi halus */
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .product-card:hover {
            transform: scale(1.02);
        }
        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 12px 12px 0 0;
        }
        .card-body {
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }
        .card-title {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }
        .card-type {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }
        .card-description {
            font-size: 14px;
            color: #495057;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .pagination {
            justify-content: center;
            margin-top: 20px;
        }
    </style>
@endsection