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
                    <p class="card-location">{{ $product->location ?? 'Unknown Location' }}</p>
                    <p class="card-description">{{ $product->description }}</p>
                    <a href="{{ route('catalog.show', $product->id) }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <p class="text-center">Tidak ada produk untuk ditampilkan.</p>
        </div>
        @endforelse
    </div>

    {{ $products->links() }}  </div>
@endsection

@section('scripts')
    <style>
        .product-catalog {
            padding: 50px 0;
            background-color: #f8f9fa;
        }
        .product-catalog h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
        .product-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: scale(1.02);
        }
        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }
        .card-body {
            padding: 15px;
        }
        .card-title {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 10px;
        }
        .card-location {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 10px;
        }
        .card-description {
            font-size: 1rem;
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