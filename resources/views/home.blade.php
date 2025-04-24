@extends('layouts.app')

@section('content')
<div class="hero">
    <div>
        <h1>PT. Abidin Jaya Teknik</h1>
        <p>PT. Abidin Jaya Teknik adalah perusahaan yang bergerak di bidang persewaan</p>
        <a href="/catalog" class="btn btn-success">Produk Kami</a>
    </div>
</div>

<div class="container my-5">
    <h2>Produk Kami</h2>
    <div class="row">
        @forelse($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card">
                @if($product->images->first())
                <img src="{{ $product->images->first()->image_path }}" class="card-img-top" alt="{{ $product->name }}">
                @else
                <img src="https://via.placeholder.com/200" class="card-img-top" alt="No Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->type }}</p>
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
    <div class="text-end">
        <a href="/catalog" class="btn btn-link">View all →</a>
    </div>
</div>

<div class="container my-5">
    <h2>Tentang Kami</h2>
    <div class="row">
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a sapien justo. Nulla facilisi tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" class="btn btn-link">Read more →</a>
        </div>
        <div class="col-md-6">
            <img src="https://via.placeholder.com/400" class="img-fluid rounded" alt="Tentang Kami">
        </div>
    </div>
</div>
@endsection