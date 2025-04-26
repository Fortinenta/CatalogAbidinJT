<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Abidin Jaya Teknik</title>
    <!-- Bootstrap 4.6 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+" crossorigin="anonymous">
    <!-- Font Awesome for Social Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f5f7e9;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        a {
            text-decoration: none;
        }
        /* Header Styles */
        .navbar {
            background-color: #2e2e2e;
            padding: 15px 0;
        }
        .navbar-brand img {
            height: 50px;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
            font-size: 16px;
            padding: 10px 15px;
            transition: color 0.3s;
        }
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #28a745 !important;
            font-weight: bold;
        }
        /* Hero Section */
        .hero {
            position: relative;
            background: url('https://via.placeholder.com/1200x400') no-repeat center center;
            background-size: cover;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero-content {
            position: relative;
            z-index: 1;
        }
        .hero h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 15px;
            text-transform: uppercase;
        }
        .hero p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .hero .btn {
            background-color: #28a745;
            color: #fff;
            padding: 10px 25px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .hero .btn:hover {
            background-color: #218838;
        }
        /* Resources Section */
        .resources-section h2 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }
        .resource-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .resource-card h5 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }
        .resource-card p {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }
        /* Footer Styles */
        .footer {
            background-color: #2a6747;
            color: #fff;
            padding: 30px 0;
            text-align: center;
        }
        .footer img {
            height: 50px;
            margin-bottom: 15px;
        }
        .footer p {
            margin: 5px 0;
            font-size: 14px;
        }
        .social-icons a {
            color: #fff;
            font-size: 20px;
            margin: 0 10px;
            transition: color 0.3s;
        }
        .social-icons a:hover {
            color: #ddd;
        }
        /* Responsive Adjustments */
        @media (max-width: 991px) {
            .navbar-nav .nav-link {
                padding: 10px;
            }
            .hero {
                height: 300px;
            }
            .hero h1 {
                font-size: 32px;
            }
            .hero p {
                font-size: 16px;
            }
            .hero .btn {
                padding: 8px 20px;
                font-size: 14px;
            }
        }
        @media (max-width: 767px) {
            .hero {
                height: 250px;
            }
            .hero h1 {
                font-size: 24px;
            }
            .hero p {
                font-size: 14px;
            }
            .resources-section h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Abidin JT Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('catalog*') ? 'active' : '' }}" href="/catalog">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hubungi-kami">Hubungi Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin*') ? 'active' : '' }}" href="/admin">Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-content">
            <h1>Welcome to CatalogAbidinJT</h1>
            <p>Providing innovative solutions for your business needs.</p>
            <a href="/catalog" class="btn">Explore Catalog</a>
        </div>
    </div>

    <!-- Resources Section -->
    <div class="container resources-section my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Resources</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="resource-card">
                    <h5>Documentation</h5>
                    <p>Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end. <a href="https://laravel.com/docs" class="text-success">Learn more →</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="resource-card">
                    <h5>Laracasts</h5>
                    <p>Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process. <a href="https://laracasts.com" class="text-success">Learn more →</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="resource-card">
                    <h5>Laravel News</h5>
                    <p>Laravel News is a community-driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials. <a href="https://laravel-news.com/" class="text-success">Learn more →</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="resource-card">
                    <h5>Vibrant Ecosystem</h5>
                    <p>Laravel's robust library of first-party tools and libraries, such as Forge, Vapor, Nova, and Envoyer, help you take your projects to the next level. Pair them with powerful open-source libraries like Cashier, Dusk, Echo, Horizon, Sanctum, Telescope, and more. <a href="https://laravel.com/docs" class="text-success">Learn more →</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer" id="hubungi-kami">
        <div class="container">
            <img src="{{ asset('images/logo.png') }}" alt="Abidin JT Logo">
            <p>We make our customers happy by the many choices possible</p>
            <p>Email: cvabidinjayatehnik@gmail.com | Telp: 08177382684</p>
            <p>Alamat: Jl. Gojah Mada #114 RW, 005 No. 18 Dukuh Nghgas, Waru Sidoarjo</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 4.6 JS and Dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>