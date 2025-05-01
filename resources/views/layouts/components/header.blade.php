<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Left side links -->
        <div class="d-flex">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
                </li>
            </ul>
        </div>

        <!-- Centered logo -->
        <a class="navbar-brand mx-auto" href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Abidin JT Logo">
        </a>

        <!-- Right side links -->
        <div class="d-flex">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('catalog*') ? 'active' : '' }}" href="/catalog">Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hubungi-kami">Hubungi Kami</a>
                </li>
            </ul>
        </div>

        <!-- Toggler for mobile view -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>