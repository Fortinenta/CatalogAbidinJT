<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Abidin Jaya Teknik</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #F0E5D8;
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            /* Ensure the body takes at least the full viewport height */
            display: flex;
            flex-direction: column;
            /* Use flexbox to control layout */
        }

        a {
            text-decoration: none;
        }

        /* Navbar Styles */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 15px 0;
            background-color: rgba(117, 207, 184, 0.85);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .navbar-brand img {
            height: 40px;
            filter: drop-shadow(1px 1px 2px rgba(0, 0, 0, 0.3));
        }

        .navbar-nav {
            width: 100%;
            justify-content: center;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            font-size: 16px;
            font-weight: 600;
            padding: 10px 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #75CFB8 !important;
        }

        .navbar-toggler {
            border-color: #75CFB8;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(117, 207, 184, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        /* Hero Section */
        .hero {
            position: relative;
            background: url('{{ asset('images/hero-bg.jpg') }}') no-repeat center center;
            background-size: cover;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            border-bottom-right-radius: 100px;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            padding: 20px;
        }

        .hero-title {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
        }

        .hero-subtitle {
            font-size: 18px;
            color: #eee;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .hero-button {
            background-color: #FFC478;
            color: #fff;
            padding: 10px 25px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
            opacity: 0.9;
        }

        .hero-button:hover {
            background-color: #BBDFC8;
            opacity: 1;
        }

        /* Product Section */
        #product-section {
            margin-top: 60px;
            margin-bottom: 60px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 0 10px;
        }

        .product-title {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin: 0;
        }

        .product-view-all {
            color: #75CFB8;
            font-size: 14px;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .product-view-all:hover {
            color: #BBDFC8;
        }

        .product-grid {
            display: flex;
            flex-wrap: wrap;
            margin-right: -10px;
            margin-left: -10px;
        }

        .product-item {
            padding-right: 10px;
            padding-left: 10px;
        }

        .product-card {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .product-card .card-body {
            padding: 10px;
        }

        .product-card .card-title {
            font-size: 16px;
            color: #333;
            margin: 0;
        }

        .product-card .card-location {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
            display: flex;
            align-items: center;
        }

        .product-card .card-location::before {
            content: '';
            display: inline-block;
            width: 6px;
            height: 6px;
            background-color: #75CFB8;
            border-radius: 50%;
            margin-right: 5px;
        }

        /* Tentang Kami Section */
        #tentang-kami-section {
            margin-top: 60px;
            margin-bottom: 60px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .tentang-kami-section h2 {
            font-size: 24px;
            font-weight: 700;
            color: #333;
        }

        .tentang-kami-section p {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }

        .tentang-kami-img {
            border-radius: 10px;
            width: 100%;
            height: auto;
        }

        .tentang-kami-section .read-more {
            color: #75CFB8;
            font-size: 14px;
            font-weight: 600;
        }

        .tentang-kami-section .read-more:hover {
            color: #BBDFC8;
        }

        /* Footer Styles */
        .footer {
            background-color: rgba(117, 207, 184, 0.9);
            color: #fff;
            padding: 40px 0 15px;
            margin-top: auto;
            /* Push the footer to the bottom */
        }

        .footer-title {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .footer p {
            font-size: 12px;
            margin-bottom: 8px;
        }

        .footer ul {
            padding: 0;
        }

        .footer ul li {
            margin-bottom: 8px;
        }

        .footer ul li a {
            color: #fff;
            font-size: 12px;
            transition: color 0.3s ease;
        }

        .footer ul li a:hover {
            color: #F0E5D8;
        }

        .footer .contact-details p i {
            margin-right: 8px;
        }

        .footer .copyright {
            font-size: 12px;
            margin: 0;
        }

        .social-icons {
            margin-top: 15px;
        }

        .social-icons a {
            color: #fff;
            font-size: 18px;
            margin: 0 8px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: #F0E5D8;
        }

        /* Responsive Adjustments */
        @media (max-width: 991px) {
            .navbar-nav {
                background: rgba(117, 207, 184, 0.8);
                padding: 15px;
            }

            .navbar-nav .nav-link {
                text-align: center;
            }

            .hero {
                height: 400px;
                border-bottom-right-radius: 40px;
            }

            .hero h1 {
                font-size: 30px;
            }

            .hero p {
                font-size: 14px;
            }

            .hero .btn {
                padding: 6px 15px;
                font-size: 12px;
            }
        }

        @media (max-width: 767px) {
            .hero {
                height: 300px;
                border-bottom-right-radius: 30px;
            }

            .hero h1 {
                font-size: 24px;
            }

            .hero p {
                font-size: 12px;
            }

            .product-section h2,
            .tentang-kami-section h2 {
                font-size: 20px;
            }

            .tentang-kami-img {
                margin-top: 15px;
            }

            .footer .row.align-items-center {
                text-align: center;
            }

            .footer .social-icons {
                margin-top: 8px;
            }
        }

        @media (max-width: 575px) {
            .product-section .view-all,
            .tentang-kami-section .read-more {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    @include('layouts.components.header')

    @yield('content')

    @include('layouts.components.footer')

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>