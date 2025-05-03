@extends('layouts.app')

@section('title', 'Katalog Produk - PT. Abidin Jaya Teknik')

@section('content')
<div class="catalog-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                {{-- <h5 class="section-label" data-aos="fade-right">~ KATALOG PRODUK</h5> --}}
                <h2 class="catalog-title" data-aos="fade-up">JELAJAHI PRODUK KAMI</h2>
                <p class="catalog-description" data-aos="fade-up" data-aos-delay="200">
                    Temukan berbagai material teknik berkualitas tinggi untuk proyek kelistrikan, telekomunikasi, dan industri dari PT. Abidin Jaya Teknik.
                </p>
                <div class="highlight-points" data-aos="fade-up" data-aos-delay="300">
                    <div class="highlight-item">
                        <i class="fas fa-star"></i>
                        <div>
                            <h4>Produk Berkualitas</h4>
                            <p>Material tahan lama sesuai standar nasional.</p>
                        </div>
                    </div>
                    <div class="highlight-item">
                        <i class="fas fa-th-large"></i>
                        <div>
                            <h4>Pilihan Beragam</h4>
                            <p>Jelajahi berbagai jenis produk untuk kebutuhan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 text-center">
                <div class="hero-image-wrapper" data-aos="fade-left">
                    <img src="https://www.mintsoft.com/media/chzlxsn3/types_of_warehouse_blog.png?width=1200&height=630&v=1dab8149acd8d70" alt="Produk Teknik" class="hero-image">
                    <div class="image-overlay">
                        <p class="overlay-text">Jelajahi Sekarang</p>
                    </div>
                </div>
                <a href="#products" class="cta-button" data-aos="zoom-in" data-aos-delay="400">Lihat Semua Produk</a>
            </div>
        </div>
        <form method="GET" action="{{ route('catalog.index') }}" class="catalog-search-form" data-aos="fade-up" data-aos-delay="500">
            <div class="search-filter-container">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" name="name" value="{{ request('name') }}" class="search-input" placeholder="Cari produk...">
                </div>
                <div class="filter-box">
                    <select name="type" onchange="this.form.submit()" class="filter-select">
                        <option value="">Semua Jenis</option>
                        @foreach($types as $type)
                            <option value="{{ $type }}" {{ request('type') == $type ? 'selected' : '' }}>{{ ucfirst($type) }}</option>
                        @endforeach
                    </select>
                    <i class="fas fa-chevron-down filter-icon"></i>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="catalog-products-section" id="products">
    <div class="container">
        <div class="product-grid">
            @forelse($products as $product)
            <div class="product-card" data-aos="flip-up" data-aos-delay="{{ $loop->index * 100 }}">
                <a href="{{ route('catalog.show', $product->id) }}" class="product-image-wrapper">
                    @if($product->images->first())
                        <img src="{{ $product->images->first()->image_path }}" alt="{{ $product->name }}" class="product-image">
                    @else
                        <img src="https://via.placeholder.com/200" alt="No Image" class="product-image">
                    @endif
                    <div class="image-overlay">
                        <span class="overlay-text">{{ $product->name }}</span>
                    </div>
                </a>
                <div class="product-info">
                    <h3 class="product-name">{{ $product->name }}</h3>
                    <p class="product-type">{{ ucfirst($product->type) }}</p>
                    <a href="{{ route('catalog.show', $product->id) }}" class="product-button">Lihat Detail</a>
                </div>
            </div>
            @empty
            <div class="no-products-message">
                <p>Tidak ada produk yang ditemukan.</p>
            </div>
            @endforelse
        </div>

        <div class="pagination-container">
            {{ $products->appends(request()->except('page'))->links() }}
        </div>
    </div>
</div>
@endsection

@section('scripts')
<style>
    /* Catalog Hero Section */
    .catalog-hero {
        background: #A3E4D7;
        padding: 150px 0 80px;
        position: relative;
    }

    .section-label {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 1.2rem;
        color: #FFD700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 1rem;
    }

    .catalog-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        font-size: 2.8rem;
        color: #2E7D32;
        text-transform: uppercase;
        margin-bottom: 1.5rem;
    }

    .catalog-description {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 2rem;
        line-height: 1.6;
    }

    .highlight-points {
        margin-bottom: 2rem;
    }

    .highlight-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
    }

    .highlight-item i {
        color: #4CAF50;
        font-size: 1.8rem;
        margin-right: 1rem;
    }

    .highlight-item h4 {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        color: #2E7D32;
        margin-bottom: 0.5rem;
    }

    .highlight-item p {
        font-family: 'Inter', sans-serif;
        font-weight: 400;
        font-size: 0.9rem;
        color: #666;
        margin: 0;
    }

    .cta-button {
        background: linear-gradient(90deg, #4CAF50, #66BB6A);
        color: #fff;
        padding: 12px 30px;
        border-radius: 5px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        text-transform: uppercase;
        transition: background 0.3s ease, transform 0.3s ease;
        display: inline-block;
        margin-top: 1rem;
    }

    .cta-button:hover {
        background: linear-gradient(90deg, #66BB6A, #4CAF50);
        transform: scale(1.05);
        color: #fff;
    }

    .hero-image-wrapper {
        position: relative;
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .hero-image {
        width: 100%;
        max-width: 400px;
        height: auto;
        border-radius: 20px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .hero-image-wrapper:hover .hero-image {
        transform: scale(1.05);
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(46, 125, 50, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 20px;
    }

    .hero-image-wrapper:hover .image-overlay {
        opacity: 1;
    }

    .overlay-text {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        color: #fff;
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .catalog-search-form {
        max-width: 800px;
        margin: 2rem auto 0;
    }

    .search-filter-container {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .search-box, .filter-box {
        position: relative;
        max-width: 350px;
        width: 100%;
    }

    .search-input, .filter-select {
        width: 100%;
        padding: 12px 20px 12px 40px;
        border: none;
        border-radius: 30px;
        background: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        color: #333;
        transition: box-shadow 0.3s ease;
    }

    .search-input:focus, .filter-select:focus {
        box-shadow: 0 6px 20px rgba(76, 175, 80, 0.3);
        outline: none;
    }

    .search-input::placeholder {
        color: #999;
    }

    .search-icon, .filter-icon {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: #666;
        font-size: 1rem;
    }

    .search-icon {
        left: 15px;
    }

    .filter-icon {
        right: 15px;
        pointer-events: none;
    }

    .filter-select {
        padding-right: 40px;
        appearance: none;
    }

    /* Product Section */
    .catalog-products-section {
        padding: 6rem 0;
        background: linear-gradient(135deg, #f0f8f5, #e0f2e9);
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2.5rem;
        padding: 1.5rem 0;
    }

    .product-card {
        background: #fff;
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1), 0 0 15px rgba(46, 125, 50, 0.2);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        display: flex;
        flex-direction: column;
    }

    .product-card:hover {
        transform: translateY(-8px) rotate(1deg);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15), 0 0 20px rgba(46, 125, 50, 0.3);
    }

    .product-image-wrapper {
        position: relative;
        display: block;
        overflow: hidden;
    }

    .product-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .product-card:hover .product-image {
        transform: scale(1.1);
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(46, 125, 50, 0.6), rgba(76, 175, 80, 0.3));
        opacity: 0;
        transition: opacity 0.4s ease;
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
        font-size: 1.5rem;
        color: #fff;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        text-transform: uppercase;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .product-card:hover .overlay-text {
        opacity: 1;
    }

    .product-info {
        padding: 2rem;
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .product-name {
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        font-size: 1.4rem;
        color: #2E7D32;
        margin: 0;
        text-transform: uppercase;
    }

    .product-type {
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        font-size: 1rem;
        color: #666;
        margin: 0;
        text-transform: capitalize;
    }

    .product-button {
        background: linear-gradient(90deg, #4CAF50, #66BB6A);
        color: #fff;
        padding: 12px 25px;
        border-radius: 25px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        text-transform: uppercase;
        transition: background 0.3s ease, transform 0.3s ease;
        margin-top: auto;
    }

    .product-button:hover {
        background: linear-gradient(90deg, #66BB6A, #4CAF50);
        transform: scale(1.05);
    }

    .no-products-message {
        grid-column: 1 / -1;
        text-align: center;
        padding: 3rem;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .no-products-message p {
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 1.3rem;
        color: #666;
    }

    /* Pagination */
    .pagination-container {
        margin-top: 4rem;
        text-align: center;
    }

    .pagination .page-item .page-link {
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        color: #2E7D32;
        background: #fff;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .pagination .page-item .page-link:hover {
        background: #4CAF50;
        color: #fff;
        transform: scale(1.1);
        box-shadow: 0 0 15px rgba(76, 175, 80, 0.3);
    }

    .pagination .page-item.active .page-link {
        background: #2E7D32;
        color: #fff;
        box-shadow: 0 0 15px rgba(46, 125, 50, 0.5);
    }

    /* Responsivitas */
    @media (max-width: 991.98px) {
        .catalog-hero {
            padding: 120px 0 60px;
        }

        .catalog-title {
            font-size: 2.2rem;
        }

        .catalog-description {
            font-size: 1rem;
        }

        .hero-image {
            max-width: 300px;
        }

        .search-box, .filter-box {
            max-width: 300px;
        }

        .product-image {
            height: 200px;
        }

        .product-name {
            font-size: 1.2rem;
        }

        .product-type {
            font-size: 0.9rem;
        }

        .product-button {
            font-size: 0.9rem;
            padding: 10px 20px;
        }
    }

    @media (max-width: 767.98px) {
        .catalog-hero {
            padding: 100px 0 50px;
            text-align: center;
        }

        .section-label {
            font-size: 1rem;
        }

        .catalog-title {
            font-size: 1.8rem;
        }

        .catalog-description {
            font-size: 0.9rem;
        }

        .highlight-item i {
            font-size: 1.5rem;
        }

        .highlight-item h4 {
            font-size: 1rem;
        }

        .highlight-item p {
            font-size: 0.8rem;
        }

        .hero-image {
            max-width: 250px;
            margin-top: 2rem;
        }

        .cta-button {
            margin-top: 1rem;
        }

        .search-filter-container {
            flex-direction: column;
            gap: 15px;
        }

        .search-box, .filter-box {
            max-width: 100%;
        }

        .product-image {
            height: 180px;
        }

        .product-name {
            font-size: 1.1rem;
        }

        .product-type {
            font-size: 0.85rem;
        }

        .product-button {
            font-size: 0.85rem;
        }
    }
</style>

<script>
document.querySelector('.search-input').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        this.closest('form').submit();
    }
});
</script>
@endsection