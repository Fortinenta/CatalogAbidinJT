@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2>Katalog Produk</h2>
    <form method="GET" action="{{ route('catalog') }}" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="name" class="form-control" placeholder="Cari berdasarkan nama" value="{{ request('name') }}">
            </div>
            <div class="col-md-3">
                <input type="text" name="type" class="form-control" placeholder="Cari berdasarkan jenis" value="{{ request('type') }}">
            </div>
            <div class="col-md-3">
                <select name="price" class="form-control">
                    <option value="">Urutkan berdasarkan harga</option>
                    <option value="asc" {{ request('price') == 'asc' ? 'selected' : '' }}>Harga: Rendah ke Tinggi</option>
                    <option value="desc" {{ request('price') == 'desc' ? 'selected' : '' }}>Harga: Tinggi ke Rendah</option>
                </select>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary w-100">Cari</button>
            </div>
        </div>
    </form>

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
                    <p class="card-text">Rp {{ number_format($product->price, 2) }}</p>
                    <a href="{{ route('catalog.show', $product->id) }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <p class="text-center">Tidak ada produk yang ditemukan.</p>
        </div>
        @endforelse
    </div>

    {{ $products->links() }}
</div>
@endsection