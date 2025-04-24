<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Abidin Jaya Teknik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f5f7e9; }
        .navbar { background-color: #2e2e2e; }
        .navbar a { color: #fff; }
        .hero { background: url('https://via.placeholder.com/1200x400') no-repeat center center; background-size: cover; height: 400px; display: flex; align-items: center; justify-content: center; color: #fff; text-align: center; }
        .footer { background-color: #2a6747; color: #fff; padding: 20px 0; }
        .card-img-top { height: 200px; object-fit: cover; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Abidin JT Logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/catalog">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#hubungi">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Abidin JT Logo" height="50">
            <p>We make our customers happy by the many choices possible</p>
            <p>Email: cvabidinjayatehnik@gmail.com | Telp: 0817323244</p>
            <p>Alamat: Jl. Opuh Odja No. 81 RT. 005 Desa Dukingga-Wara, Sidoarjo</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>