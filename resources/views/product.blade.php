@extends('layouts.app')

@section('title', 'Detail Produk - Katalog PT. Abidin Jaya Teknik')

@section('content')
<div class="product-detail-container py-6" style="padding-top: 100px;">
    <div class="container">
        <!-- Product Gallery and Details Side by Side -->
        <div class="row align-items-start" data-aos="fade-up">
            <div class="col-lg-6">
                <!-- Product Gallery -->
                <div class="product-gallery mb-4">
                    <div class="swiper product-slider">
                        <div class="swiper-wrapper">
                            @forelse($product->images as $image)
                            <div class="swiper-slide">
                                <img src="{{ $image->image_path }}" alt="{{ $product->name }}" class="main-product-img" onclick="openImagePopup('{{ $image->image_path }}')">
                            </div>
                            @empty
                            <div class="swiper-slide">
                                <img src="https://via.placeholder.com/600" alt="No Image" class="main-product-img" onclick="openImagePopup('https://via.placeholder.com/600')">
                            </div>
                            @endforelse
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="thumbnail-container mt-3">
                        <div class="thumbnail-wrapper">
                            @forelse($product->images as $index => $image)
                            <img src="{{ $image->image_path }}" alt="{{ $product->name }}" class="thumbnail-img" onclick="changeMainImage({{ $index }})">
                            @empty
                            <img src="https://via.placeholder.com/100" alt="No Image" class="thumbnail-img" onclick="changeMainImage(0)">
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Product Details -->
                <div class="product-card">
                    <h1 class="product-name">{{ $product->name }}</h1>
                    <div class="spec-table">
                        <h4 class="spec-title">Spesifikasi</h4>
                        @forelse($product->specifications as $spec)
                        <div class="spec-row">
                            <span class="spec-key">{{ $spec->spec_key }}</span>
                            <span class="spec-value">{{ $spec->spec_value }}</span>
                        </div>
                        @empty
                        <p>Tidak ada spesifikasi tersedia.</p>
                        @endforelse
                    </div>
                    <div class="product-details mt-4">
                        <p class="detail-item"><strong>Jenis:</strong> {{ $product->type }}</p>
                        <p class="detail-item"><strong>Harga:</strong> <span class="price">Rp. {{ number_format($product->price, 0, ',', '.') }}</span></p>
                    </div>
                    <div class="additional-info mt-4">
                        <h4>Informasi Tambahan</h4>
                        <p>Ketersediaan: <span class="text-success">Tersedia</span></p>
                        <p>Estimasi Pengiriman: 3-5 Hari</p>
                    </div>
                    <div class="button-group mt-4">
                        <a href="#contact" class="cta-button mr-2">Kontak untuk Harga</a>
                        <a href="#contact" class="cta-button">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image Popup -->
        <div class="image-popup" id="imagePopup">
            <span class="close-popup" onclick="closeImagePopup()">×</span>
            <img id="popupImage" src="" alt="Full Image">
        </div>

        <!-- Random Products -->
        <div class="random-products-section mt-8" data-aos="fade-up" data-aos-delay="400">
            <h2 class="section-title">Produk Lainnya</h2>
            <div class="product-grid">
                @forelse($relatedProducts->take(4) as $relatedProduct)
                <div class="product-card" data-aos="flip-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <a href="{{ route('catalog.show', $relatedProduct->id) }}" class="product-link">
                        @if($relatedProduct->images->first())
                        <img src="{{ $relatedProduct->images->first()->image_path }}" alt="{{ $relatedProduct->name }}" class="product-img">
                        @else
                        <img src="https://via.placeholder.com/200" alt="No Image" class="product-img">
                        @endif
                        <div class="image-overlay">
                            <span class="overlay-text">{{ $relatedProduct->name }}</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $relatedProduct->name }}</h5>
                            <p class="card-type">{{ $relatedProduct->type }}</p>
                        </div>
                    </a>
                </div>
                @empty
                <p class="text-center">Tidak ada produk lain untuk ditampilkan.</p>
                @endforelse
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('catalog.index') }}" class="cta-button">Lihat Lebih Banyak</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
// Declare swiper globally
let swiper = new Swiper('.product-slider', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

function changeMainImage(index) {
    // Adjust for loop mode by using realIndex
    swiper.slideTo(index);
}

function openImagePopup(imageSrc) {
    const popup = document.getElementById('imagePopup');
    const popupImage = document.getElementById('popupImage');
    popupImage.src = imageSrc;
    popup.style.display = 'flex';
}

function closeImagePopup() {
    const popup = document.getElementById('imagePopup');
    popup.style.display = 'none';
}
</script>
<style>
.product-detail-container {
    background: linear-gradient(135deg, #f0f8f5, #e0f2e9);
    min-height: 80vh;
}

.product-gallery {
    position: relative;
    max-width: 100%;
}

.product-slider {
    width: 100%;
    height: 500px;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.main-product-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.main-product-img:hover {
    transform: scale(1.05);
}

.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-pagination-bullet {
    background: #4CAF50;
    opacity: 0.7;
}

.swiper-pagination-bullet-active {
    background: #2E7D32;
    opacity: 1;
}

.thumbnail-container {
    display: flex;
    justify-content: center;
    gap: 15px;
    overflow-x: auto;
    padding: 15px 0;
}

.thumbnail-wrapper {
    display: flex;
    gap: 15px;
}

.thumbnail-img {
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 12px;
    cursor: pointer;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(8px);
    border: 2px solid transparent;
    transition: all 0.3s ease;
}

.thumbnail-img:hover {
    border-color: #4CAF50;
    transform: scale(1.1);
}

.product-info-row {
    display: flex;
    gap: 2rem;
}

.product-card {
    background: #fff;
    padding: 2.5rem;
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    height: 100%;
}

.product-name {
    font-family: 'Montserrat', sans-serif;
    font-weight: 800;
    font-size: 2.8rem;
    color: #2E7D32;
    margin-bottom: 2rem;
    text-transform: uppercase;
}

.spec-table {
    margin-bottom: 2rem;
}

.spec-title {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 1.5rem;
    color: #2E7D32;
    margin-bottom: 1rem;
}

.spec-row {
    display: flex;
    justify-content: space-between;
    padding: 0.8rem 0;
    border-bottom: 1px solid #e0e0e0;
}

.spec-key {
    font-family: 'Inter', sans-serif;
    font-weight: 600;
    font-size: 1rem;
    color: #333;
}

.spec-value {
    font-family: 'Inter', sans-serif;
    font-weight: 400;
    font-size: 1rem;
    color: #666;
}

.product-details {
    margin-bottom: 1.5rem;
}

.detail-item {
    font-family: 'Inter', sans-serif;
    font-weight: 500;
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 1rem;
}

.price {
    color: #2E7D32;
    font-weight: 700;
}

.additional-info h4 {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 1.4rem;
    color: #2E7D32;
    margin-bottom: 1rem;
}

.additional-info p {
    font-family: 'Inter', sans-serif;
    font-weight: 400;
    font-size: 1rem;
    color: #666;
    margin-bottom: 0.5rem;
}

.button-group {
    display: flex;
    gap: 1rem;
}

.cta-button {
    background: linear-gradient(90deg, #4CAF50, #66BB6A);
    color: #fff;
    padding: 12px 25px;
    border-radius: 30px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    text-transform: uppercase;
    transition: background 0.3s ease, transform 0.3s ease;
}

.cta-button:hover {
    background: linear-gradient(90deg, #66BB6A, #4CAF50);
    transform: scale(1.05);
}

.image-popup {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.9);
    align-items: center;
    justify-content: center;
    z-index: 1000;
}

.close-popup {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 2rem;
    color: #fff;
    cursor: pointer;
}

#popupImage {
    max-width: 90%;
    max-height: 90%;
}

.random-products-section {
    text-align: center;
    margin-top: 6rem;
}

.section-title {
    font-family: 'Montserrat', sans-serif;
    font-weight: 800;
    font-size: 2.5rem;
    color: #2E7D32;
    margin-bottom: 2.5rem;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 2rem;
    padding: 1rem 0;
}

.product-card {
    position: relative;
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.product-img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.product-card:hover .product-img {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(46, 125, 50, 0.6), rgba(76, 175, 80, 0.3));
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-card:hover .image-overlay {
    opacity: 1;
}

.overlay-text {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 1.2rem;
    color: #fff;
    text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    text-transform: uppercase;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.product-card:hover .overlay-text {
    opacity: 1;
}

.card-body {
    padding: 1.5rem;
    text-align: center;
}

.card-title {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 1.2rem;
    color: #2E7D32;
    margin-bottom: 0.5rem;
}

.card-type {
    font-family: 'Inter', sans-serif;
    font-weight: 400;
    font-size: 0.9rem;
    color: #666;
}

.product-link {
    text-decoration: none;
    color: inherit;
}

@media (max-width: 991.98px) {
    .product-slider {
        height: 450px;
    }

    .product-name {
        font-size: 2.2rem;
    }

    .thumbnail-img {
        width: 70px;
        height: 70px;
    }

    .product-info-row {
        flex-direction: column;
    }

    .product-card {
        padding: 2rem;
    }

    .product-img {
        height: 200px;
    }

    .section-title {
        font-size: 2rem;
    }
}

@media (max-width: 767.98px) {
    .product-slider {
        height: 350px;
    }

    .product-name {
        font-size: 1.8rem;
    }

    .thumbnail-img {
        width: 60px;
        height: 60px;
    }

    .product-card {
        padding: 1.5rem;
    }

    .product-img {
        height: 180px;
    }

    .card-title {
        font-size: 1rem;
    }

    .card-type {
        font-size: 0.85rem;
    }
}
</style>
@endsection