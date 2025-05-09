<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT. Abidin Jaya Teknik')</title>
    <meta name="description" content="@yield('meta_description', 'PT. Abidin Jaya Teknik - Penyedia Material Teknik Terpercaya')">
    <meta name="keywords" content="@yield('meta_keywords', 'material teknik, konstruksi, kelistrikan, telekomunikasi')">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        /* Reset dan Gaya Dasar */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: linear-gradient(135deg, #a3e4d7, #B2E0D6);
            font-family: 'Inter', sans-serif;
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        a:hover {
            color: #4CAF50;
        }

        /* Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 1300px;
            z-index: 1000;
            padding: 15px 0;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .navbar-brand img {
            height: 50px;
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
        }

        .navbar-toggler {
            border: none;
            color: #fff;
            padding: 5px;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            width: 24px;
            height: 24px;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .nav-item {
            margin: 0 15px;
        }

        .nav-link {
            color: #fff !important;
            font-size: 16px;
            font-weight: 600;
            padding: 10px 15px;
            position: relative;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            color: #4CAF50 !important;
            transform: translateY(-2px);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background: #4CAF50;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .nav-link:hover::after, .nav-link.active::after {
            transform: scaleX(1);
        }

        /* Bagian Hero */
        .hero {
            background: url('{{ asset('images/hero-bg.jpg') }}') center/cover no-repeat;
            position: relative;
            height: 80vh;
            max-height: 700px;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            overflow: hidden;
            border-bottom-left-radius: 80px;
            border-bottom-right-radius: 80px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7));
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 90%;
            padding: 20px;
        }

        .hero-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: clamp(2.5rem, 7vw, 5rem);
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
            margin-bottom: 1.5rem;
        }

        .hero-subtitle {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: clamp(1rem, 2.5vw, 1.3rem);
            color: #f0f0f0;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-button {
            background: linear-gradient(90deg, #4CAF50, #66BB6A);
            color: #fff;
            padding: 12px 25px;
            border-radius: 50px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: clamp(0.9rem, 2vw, 1.1rem);
            text-transform: uppercase;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: inline-flex;
            align-items: center;
        }

        .hero-button i {
            margin-right: 8px;
        }

        .hero-button:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(76, 175, 80, 0.4);
        }

        /* Bagian Produk */
        .product-section {
            padding: 4rem 0;
            background: transparent;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .product-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            color: #fff;
        }

        .product-view-all {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            color: #4CAF50;
            font-size: clamp(0.9rem, 2vw, 1.1rem);
            display: flex;
            align-items: center;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .product-view-all i {
            margin-left: 8px;
        }

        .product-view-all:hover {
            color: #66BB6A;
            transform: translateX(5px);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(clamp(200px, 40vw, 250px), 1fr));
            gap: 1.5rem;
        }

        .product-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            width: 100%;
            height: clamp(180px, 30vw, 220px);
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-card:hover img {
            transform: scale(1.05);
        }

        .card-body {
            padding: 1.25rem;
            background: rgba(255, 255, 255, 0.8);
        }

        .card-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: clamp(1.1rem, 2.5vw, 1.3rem);
            color: #333;
            margin-bottom: 0.5rem;
        }

        .card-type {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: clamp(0.9rem, 2vw, 1rem);
            color: #666;
        }

        /* Bagian Siapa Kami */
        .who-we-are-section {
            padding: 4rem 0;
            background: #F5F6F5;
        }

        .who-we-are-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            color: #D32F2F;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .who-we-are-subtitle {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: clamp(1rem, 2.5vw, 1.2rem);
            color: #666;
            text-align: center;
            max-width: 800px;
            margin: 0 auto 2.5rem;
        }

        .who-we-are-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(clamp(200px, 40vw, 250px), 1fr));
            gap: 1.5rem;
        }

        .who-we-are-card {
            background: #fff;
            border-top: 2px solid #D1D5DB;
            border-bottom: 2px solid #D1D5DB;
            padding: 1.5rem;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .who-we-are-card:hover {
            transform: translateY(-5px);
        }

        .who-we-are-card i {
            color: #D32F2F;
            font-size: clamp(2rem, 5vw, 2.5rem);
            margin-bottom: 1rem;
        }

        .who-we-are-card-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: clamp(1.1rem, 2.5vw, 1.3rem);
            color: #444;
            margin-bottom: 0.75rem;
        }

        .who-we-are-card-text {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: clamp(0.9rem, 2vw, 1rem);
            color: #666;
        }

        /* Bagian Tentang Kami */
        .tentang-kami-section {
            padding: 4rem 0;
            background: transparent;
        }

        .tentang-kami-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .tentang-kami-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            color: #fff;
        }

        .tentang-kami-content p {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: clamp(0.9rem, 2.5vw, 1.1rem);
            color: #f0f0f0;
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .tentang-kami-img {
            width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        @media (hover: none) {
            .tentang-kami-img:hover, .product-card:hover, .who-we-are-card:hover, .navbar-brand img:hover, .hero-button:hover {
                transform: none;
                box-shadow: none;
            }
        }

        .tentang-kami-read-more {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            color: #4CAF50;
            font-size: clamp(0.9rem, 2vw, 1.1rem);
            display: inline-flex;
            align-items: center;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .tentang-kami-read-more i {
            margin-left: 8px;
        }

        .tentang-kami-read-more:hover {
            color: #66BB6A;
            transform: translateX(5px);
        }

        /* Responsivitas */
        @media (max-width: 1199.98px) {
            .navbar {
                width: 92%;
                padding: 12px 15px;
            }

            .hero {
                height: 75vh;
                max-height: 650px;
            }
/* 
            .product-grid, .who-we-are-grid {
                gap: 1.25rem;
            } */
        }

        @media (max-width: 991.98px) {
            .navbar {
                width: 95%;
                top: 10px;
                padding: 10px 15px;
            }

            .navbar-collapse {
                background: rgba(255, 255, 255, 0.2);
                backdrop-filter: blur(10px);
                border-radius: 15px;
                padding: 15px;
                margin-top: 10px;
                max-height: 80vh;
                overflow-y: auto;
            }

            .navbar-nav {
                flex-direction: column;
                align-items: center;
                width: 100%;
            }

            .nav-item {
                margin: 8px 0;
                width: 100%;
                text-align: center;
            }

            .nav-link {
                font-size: 17px;
                padding: 10px;
                display: block;
            }

            .navbar-brand {
                margin-right: 0;
            }

            .navbar-brand img {
                height: 40px;
            }

            .hero {
                height: 65vh;
                max-height: 550px;
                border-bottom-left-radius: 50px;
                border-bottom-right-radius: 50px;
            }

            .hero-title {
                font-size: clamp(2rem, 5vw, 3.5rem);
            }

            .hero-subtitle {
                font-size: clamp(0.9rem, 2vw, 1.2rem);
            }
/* 
            .product-section, .who-we-are-section, .tentang-kami-section {
                padding: 3rem 0;
            }

            .product-grid, .who-we-are-grid {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }

            .tentang-kami-section .row {
                flex-direction: column;
            }

            .tentang-kami-img {
                margin-top: 1.5rem;
                max-width: 500px;
                margin-left: auto;
                margin-right: auto;
            } */
        }

        @media (max-width: 767.98px) {
            .navbar {
                top: 8px;
                padding: 8px 12px;
            }

            .navbar-toggler-icon {
                width: 22px;
                height: 22px;
            }

            .nav-link {
                font-size: 16px;
            }

            .hero {
                height: 55vh;
                max-height: 500px;
                border-bottom-left-radius: 40px;
                border-bottom-right-radius: 40px;
            }

            .hero-title {
                font-size: clamp(1.8rem, 4.5vw, 2.8rem);
            }

            .hero-subtitle {
                font-size: clamp(0.85rem, 1.8vw, 1.1rem);
            }

            .hero-button {
                padding: 10px 20px;
                font-size: clamp(0.85rem, 1.8vw, 1rem);
            }
/* 
            .product-title, .who-we-are-title, .tentang-kami-title {
                font-size: clamp(1.6rem, 4vw, 2.2rem);
            }

            .product-view-all, .tentang-kami-read-more {
                font-size: clamp(0.85rem, 1.8vw, 1rem);
            }

            .product-card img {
                height: clamp(160px, 25vw, 200px);
            }

            .who-we-are-subtitle {
                font-size: clamp(0.9rem, 2vw, 1.1rem);
            }

            .who-we-are-card {
                padding: 1.25rem;
            }

            .who-we-are-card i {
                font-size: clamp(1.8rem, 4.5vw, 2.2rem);
            } */
        }

        @media (max-width: 575.98px) {
            .navbar {
                width: 92%;
                top: 5px;
                padding: 6px 10px;
                border-radius: 20px;
            }

            .navbar-brand img {
                height: 35px;
            }

            .navbar-collapse {
                padding: 12px;
                margin-top: 8px;
                border-radius: 10px;
            }

            .nav-item {
                margin: 6px 0;
            }

            .nav-link {
                font-size: 15px;
                padding: 8px;
            }

            .hero {
                height: 50vh;
                max-height: 400px;
                min-height: 320px;
                border-bottom-left-radius: 30px;
                border-bottom-right-radius: 30px;
            }

            .hero-content {
                padding: 15px;
            }

            .hero-title {
                font-size: clamp(1.5rem, 4vw, 2.2rem);
                margin-bottom: 1rem;
            }

            .hero-subtitle {
                font-size: clamp(0.8rem, 1.6vw, 0.95rem);
                margin-bottom: 1.5rem;
            }

            .hero-button {
                padding: 8px 15px;
                font-size: clamp(0.8rem, 1.6vw, 0.9rem);
            }
/* 
            .product-section, .who-we-are-section, .tentang-kami-section {
                padding: 2.5rem 0;
            }

            .product-header, .tentang-kami-header {
                margin-bottom: 2rem;
            }

            .product-grid, .who-we-are-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .product-card {
                border-radius: 15px;
            }

            .product-card img {
                height: clamp(140px, 22vw, 180px);
            }

            .card-body {
                padding: 1rem;
            }

            .card-title {
                font-size: clamp(1rem, 2vw, 1.2rem);
            }

            .card-type {
                font-size: clamp(0.8rem, 1.8vw, 0.9rem);
            }

            .who-we-are-card {
                padding: 1rem;
                border-radius: 10px;
            }

            .who-we-are-card i {
                font-size: clamp(1.6rem, 4vw, 2rem);
                margin-bottom: 0.75rem;
            }

            .who-we-are-card-title {
                font-size: clamp(1rem, 2vw, 1.2rem);
                margin-bottom: 0.5rem;
            }

            .who-we-are-card-text {
                font-size: clamp(0.8rem, 1.8vw, 0.9rem);
            }

            .tentang-kami-img {
                margin-top: 1rem;
                border-radius: 15px;
                max-width: 400px;
            }

            .tentang-kami-content p {
                font-size: clamp(0.85rem, 2vw, 1rem);
            } */
        }

        @media (max-width: 400px) {
            .navbar {
                width: 90%;
                padding: 5px 8px;
            }

            .navbar-brand img {
                height: 30px;
            }

            .navbar-toggler-icon {
                width: 20px;
                height: 20px;
            }

            .nav-link {
                font-size: 14px;
                padding: 7px;
            }
/* 
            .hero {
                height: 45vh;
                max-height: 360px;
                min-height: 280px;
            }

            .hero-title {
                font-size: clamp(1.4rem, 3.5vw, 2rem);
            }

            .hero-subtitle {
                font-size: clamp(0.75rem, 1.5vw, 0.9rem);
            }

            .product-section, .who-we-are-section, .tentang-kami-section {
                padding: 2rem 0;
            }

            .product-card img {
                height: clamp(120px, 20vw, 160px);
            } */
        }
    </style>
    @yield('styles')
</head>

<body>
    @include('layouts.components.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.components.footer')

    <!-- Load scripts at the end of body -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
    @yield('scripts')
</body>

</html>