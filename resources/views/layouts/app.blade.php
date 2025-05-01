<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT. Abidin Jaya Teknik')</title>
    <meta name="description" content="@yield('meta_description', 'PT. Abidin Jaya Teknik - Penyedia Sparepart Konstruksi Terpercaya')">
    <meta name="keywords" content="@yield('meta_keywords', 'sparepart konstruksi, alat berat, teknik, bangunan')">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;800&display=swap" rel="stylesheet">
    <style>
        /* Reset dan Box Sizing */
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth; /* Efek smooth scrolling */
        }

        body {
            background-color: #DAFFDB; /* Set background color to #DAFFDB */
            font-family: 'DM Sans', sans-serif;
            font-weight: 600; /* SemiBold */
            color: #555; /* Warna teks abu-abu lembut */
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #75CFB8;
        }

        /* Navbar */
        .navbar {
            background-color: rgba(255, 255, 255, 0.95); /* White semi-transparent background */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 20px; /* Add margin from the top */
            left: 50%;
            transform: translateX(-50%);
            width: 90%; /* Reduce width to create margin on sides */
            max-width: 1200px; /* Optional: limit max width for larger screens */
            z-index: 1000;
            transition: all 0.3s ease-in-out;
            padding: 10px 0;
            border-radius: 20px; /* Rounded edges */
        }

        .navbar-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .navbar-brand img {
            height: 40px;
            filter: drop-shadow(1px 1px 2px rgba(0, 0, 0, 0.2));
        }

        .navbar-toggler {
            border-color: #555;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(85, 85, 85, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            width: 100%; /* Ensure the nav takes full width for better spacing */
            justify-content: space-between; /* Distribute items with more space */
        }

        .nav-item {
            margin: 0 30px; /* Increased margin for wider spacing */
            position: relative; /* For positioning the underline */
        }

        .nav-link {
            color: #555 !important; /* Darker text color */
            font-size: 16px;
            font-weight: 600;
            padding: 10px 15px; /* Keep padding minimal to let margin take effect */
            text-shadow: none; /* Remove text shadow */
            position: relative;
            transition: color 0.3s ease-in-out;
        }

        /* Underline animation */
        .nav-link::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #75CFB8;
            transform: scaleX(0); /* Start with no width */
            transform-origin: bottom right;
            transition: transform 0.3s ease-in-out;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            transform: scaleX(1); /* Expand to full width on hover or active */
            transform-origin: bottom left;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #75CFB8 !important; /* Hover and active color */
        }

        /* Hero Section */
        .hero {
            background: url('{{ asset('images/hero-bg.jpg') }}') center/cover no-repeat;
            position: relative;
            height: 650px; /* Increased height for a longer section */
            display: flex;
            align-items: center;
            justify-content: center; /* Center content horizontally */
            text-align: center; /* Center text */
            color: #fff;
            overflow: hidden;
            border-bottom-left-radius: 60px; /* Rounded bottom-left corner */
            border-bottom-right-radius: 60px; /* Rounded bottom-right corner */
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 600px; /* Limit width for better readability */
        }

        .hero-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 800; /* Extra Bold */
            font-size: 4rem; /* Slightly larger to match Main.png */
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            line-height: 1.2;
        }

        .hero-subtitle {
            font-family: 'Poppins', sans-serif;
            font-weight: 300; /* Light */
            font-size: 1.2rem; /* Adjusted to match Main.png */
            color: #eee;
            margin-bottom: 2.5rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            max-width: 500px; /* Limit subtitle width to match design */
            margin-left: auto; /* Center the subtitle */
            margin-right: auto; /* Center the subtitle */
        }

        .hero-button {
            display: inline-flex;
            align-items: center;
            background-color: #28A745; /* Green color to match the button in the image */
            color: #fff;
            padding: 12px 24px; /* Adjusted padding to match Main.png */
            border-radius: 25px;
            font-family: 'Poppins', sans-serif;
            font-weight: 300; /* Light */
            font-size: 1rem;
            text-transform: uppercase;
            transition: all 0.3s ease-in-out;
        }

        .hero-button i {
            margin-right: 8px; /* Space between icon and text */
        }

        .hero-button:hover {
            background-color: #218838; /* Darker green on hover */
            transform: scale(1.05);
        }

        /* Product Section */
        #product-section {
            padding: 4rem 0;
            background-color: transparent; /* Transparent background to show #DAFFDB */
            margin-top: 4rem;
            margin-bottom: 4rem;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding: 0 1rem;
        }

        .product-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 600; /* Semibold */
            font-size: 2rem;
            color: #333;
        }

        .product-view-all {
            font-family: 'Poppins', sans-serif;
            font-weight: 600; /* Semibold */
            color: #28A745; /* Green color to match the design */
            font-size: 1rem;
            transition: color 0.3s ease-in-out;
            display: flex;
            align-items: center;
        }

        .product-view-all i {
            margin-left: 8px;
        }

        .product-view-all:hover {
            color: #218838; /* Darker green on hover */
        }

        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            padding: 0 1rem;
        }

        .product-item {
            flex: 1 1 calc(25% - 1.5rem); /* Four items per row with gap */
            min-width: 200px;
        }

        .product-card {
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .product-card:hover {
            transform: scale(1.03);
        }

        .product-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 12px 12px 0 0;
            transition: opacity 0.3s ease-in-out;
        }

        .product-card img:hover {
            opacity: 0.8;
        }

        .card-body {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }

        .card-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 600; /* Semibold */
            font-size: 1.1rem;
            color: #333;
            margin-bottom: 0.5rem;
            line-height: 1.3;
        }

        .card-type {
            font-family: 'Poppins', sans-serif;
            font-weight: 600; /* Semibold */
            font-size: 0.9rem;
            color: #666;
        }

        /* Product Detail Section */
        .product-detail-section {
            padding: 4rem 0;
            background-color: transparent; /* Transparent to show #DAFFDB */
        }

        .small-product-img {
            width: 100%;
            height: 120px; /* Fixed height for smaller images */
            object-fit: cover;
            border-radius: 8px;
            transition: opacity 0.3s ease-in-out;
        }

        .small-product-img:hover {
            opacity: 0.8;
        }

        .main-product-img {
            width: 100%;
            height: 400px; /* Fixed height for main image */
            object-fit: cover;
            border-radius: 12px;
            transition: transform 0.3s ease-in-out;
        }

        .main-product-img:hover {
            transform: scale(1.02);
        }

        .spec-title,
        .info-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 600; /* Semibold */
            font-size: 1.25rem;
            color: #333;
            border-bottom: 1px solid #ddd;
            padding-bottom: 0.5rem;
        }

        .spec-list {
            list-style-type: none;
            padding: 0;
            margin: 1rem 0;
        }

        .spec-list li {
            font-family: 'Poppins', sans-serif;
            font-weight: 300; /* Light */
            font-size: 1rem;
            color: #555;
            margin-bottom: 0.5rem;
        }

        .info-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 300; /* Light */
            font-size: 1rem;
            color: #555;
        }

        .info-text.price {
            font-family: 'Poppins', sans-serif;
            font-weight: 600; /* Semibold */
            font-size: 1.25rem;
            color: #333;
        }

        /* Related Products Section */
        .related-products-section {
            margin-top: 4rem;
        }

        /* Tentang Kami Section */
        #tentang-kami-section {
            padding: 4rem 0;
            background-color: transparent; /* Transparent background to show #DAFFDB */
            margin-top: 4rem;
            margin-bottom: 4rem;
        }

        .tentang-kami-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding: 0 1rem;
        }

        .tentang-kami-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 600; /* Semibold */
            font-size: 2rem;
            color: #333;
        }

        .tentang-kami-content p {
            font-family: 'Poppins', sans-serif;
            font-weight: 300; /* Light */
            font-size: 1rem;
            color: #555;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .tentang-kami-img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            transition: transform 0.3s ease-in-out;
        }

        .tentang-kami-img:hover {
            transform: scale(1.02);
        }

        .tentang-kami-read-more {
            font-family: 'Poppins', sans-serif;
            font-weight: 600; /* Semibold */
            color: #28A745; /* Green color to match the design */
            font-size: 1rem;
            transition: color 0.3s ease-in-out;
            display: flex;
            align-items: center;
        }

        .tentang-kami-read-more i {
            margin-left: 8px;
        }

        .tentang-kami-read-more:hover {
            color: #218838; /* Darker green on hover */
        }

        /* Footer */
        .footer {
            background-color: rgba(117, 207, 184, 0.95);
            color: #fff;
            padding: 3rem 0;
            margin-top: auto;
            text-align: center;
        }

        .footer-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #F0E5D8;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: #eee;
            transition: color 0.3s ease-in-out;
        }

        .footer-links a:hover {
            color: #fff;
        }

        .footer-contact p {
            font-size: 1rem;
            margin-bottom: 0.75rem;
        }

        .footer-contact i {
            margin-right: 0.5rem;
        }

        .footer-socials a {
            display: inline-block;
            margin: 0 1rem;
            color: #fff;
            font-size: 1.2rem;
            transition: color 0.3s ease-in-out;
        }

        .footer-socials a:hover {
            color: #F0E5D8;
        }

        .footer-copyright {
            font-size: 0.9rem;
            margin-top: 1.5rem;
            color: #ddd;
        }

        /* Responsive Design */
        @media (max-width: 991.98px) {
            .navbar {
                background-color: rgba(255, 255, 255, 0.95);
                border-radius: 20px; /* Maintain rounded edges on mobile */
                width: 90%;
                top: 10px; /* Slightly less margin on mobile */
            }

            .navbar-brand {
                position: static;
                transform: none;
                margin: 0 auto;
            }

            .navbar-nav {
                flex-direction: column;
                align-items: center;
                width: 100%;
            }

            .nav-item {
                margin: 10px 0; /* Vertical spacing for mobile */
            }

            .nav-link {
                padding: 0.75rem 0;
            }

            .nav-link::after {
                bottom: -2px; /* Adjust underline position for mobile */
            }

            .hero {
                height: 500px; /* Slightly shorter on mobile */
                padding: 5rem 2rem;
                border-bottom-left-radius: 40px;
                border-bottom-right-radius: 40px;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .product-grid {
                flex-direction: column;
            }

            .product-item {
                flex: 1 1 100%; /* Full width on mobile */
            }

            .small-product-img {
                height: 80px; /* Smaller height on mobile */
            }

            .main-product-img {
                height: 300px; /* Smaller height on mobile */
            }

            #tentang-kami-section .row {
                flex-direction: column;
            }

            .tentang-kami-img {
                margin-top: 2rem;
            }

            .footer {
                text-align: center;
            }

            .footer-links,
            .footer-contact {
                margin-bottom: 2rem;
            }
        }

        @media (max-width: 767.98px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .product-title,
            .tentang-kami-title {
                font-size: 1.75rem;
            }

            .card-title {
                font-size: 1.1rem;
            }

            .tentang-kami-content p {
                font-size: 1rem;
            }

            .small-product-img {
                height: 60px; /* Even smaller on very small screens */
            }

            .main-product-img {
                height: 250px; /* Even smaller on very small screens */
            }

            .spec-title,
            .info-title {
                font-size: 1.1rem;
            }

            .spec-list li,
            .info-text {
                font-size: 0.9rem;
            }

            .info-text.price {
                font-size: 1.1rem;
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

    @yield('scripts')

</body>
</html>