<div class="container product-section" id="product-section">
    <div class="product-header">
        <h2 class="product-title">PRODUK KAMI</h2>
        <a href="/catalog" class="view-all product-view-all">View all <i class="fas fa-arrow-right"></i></a>
    </div>
    <div class="product-grid">
        @forelse($products->take(4) as $product)
        <div class="product-item mb-4">
            <div class="product-card">
                @if($product->images->first())
                <img src="{{ $product->images->first()->image_path }}" alt="{{ $product->name }}">
                @else
                <img src="https://via.placeholder.com/200" alt="No Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-type">{{ $product->type }}</p>  {{-- Tampilkan jenis produk --}}
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