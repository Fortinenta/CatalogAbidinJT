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
            background: linear-gradient(135deg, #A3E4D7, #B2E0D6);
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

        .navbar-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
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
        }

        .navbar-nav {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .nav-item {
            margin: 0 20px;
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
            height: 700px;
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
            max-width: 700px;
        }

        .hero-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 5rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
            margin-bottom: 1.5rem;
        }

        .hero-subtitle {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1.3rem;
            color: #f0f0f0;
            margin-bottom: 2.5rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-button {
            background: linear-gradient(90deg, #4CAF50, #66BB6A);
            color: #fff;
            padding: 15px 30px;
            border-radius: 50px;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            font-size: 1.1rem;
            text-transform: uppercase;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hero-button i {
            margin-right: 10px;
        }

        .hero-button:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(76, 175, 80, 0.4);
        }

        /* Bagian Produk */
        .product-section {
            padding: 5rem 0;
            background: transparent;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
        }

        .product-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 2.5rem;
            color: #fff;
        }

        .product-view-all {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            color: #4CAF50;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .product-view-all i {
            margin-left: 10px;
        }

        .product-view-all:hover {
            color: #66BB6A;
            transform: translateX(5px);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
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
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product-card:hover img {
            transform: scale(1.05);
        }

        .card-body {
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.8);
        }

        .card-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.3rem;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .card-type {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1rem;
            color: #666;
        }

        /* Bagian Siapa Kami */
        .who-we-are-section {
            padding: 5rem 0;
            background: #F5F6F5;
        }

        .who-we-are-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 2.5rem;
            color: #D32F2F;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .who-we-are-subtitle {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1.2rem;
            color: #666;
            text-align: center;
            max-width: 800px;
            margin: 0 auto 3rem;
        }

        .who-we-are-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .who-we-are-card {
            background: #fff;
            border-top: 2px solid #D1D5DB;
            border-bottom: 2px solid #D1D5DB;
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .who-we-are-card:hover {
            transform: translateY(-5px);
        }

        .who-we-are-card i {
            color: #D32F2F;
            margin-bottom: 1rem;
        }

        .who-we-are-card-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.3rem;
            color: #444;
            margin-bottom: 1rem;
        }

        .who-we-are-card-text {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1rem;
            color: #666;
        }

        /* Bagian Tentang Kami */
        .tentang-kami-section {
            padding: 5rem 0;
            background: transparent;
        }

        .tentang-kami-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 2.5rem;
            color: #fff;
        }

        .tentang-kami-content p {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1.1rem;
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

        .tentang-kami-img:hover {
            transform: scale(1.05);
        }

        .tentang-kami-read-more {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            color: #4CAF50;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .tentang-kami-read-more i {
            margin-left: 10px;
        }

        .tentang-kami-read-more:hover {
            color: #66BB6A;
            transform: translateX(5px);
        }

        /* Responsivitas */
        @media (max-width: 991.98px) {
            .navbar {
                width: 95%;
                top: 10px;
            }

            .navbar-nav {
                flex-direction: column;
                align-items: center;
            }

            .nav-item {
                margin: 10px 0;
            }

            .hero {
                height: 600px;
                border-bottom-left-radius: 50px;
                border-bottom-right-radius: 50px;
            }

            .hero-title {
                font-size: 3rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }

            .product-grid, .who-we-are-grid {
                grid-template-columns: 1fr;
            }

            .tentang-kami-section .row {
                flex-direction: column;
            }

            .tentang-kami-img {
                margin-top: 2rem;
            }
        }

        @media (max-width: 767.98px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .product-title, .tentang-kami-title, .who-we-are-title {
                font-size: 2rem;
            }

            .who-we-are-subtitle {
                font-size: 1rem;
            }
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

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
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