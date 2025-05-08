<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Left side links -->
        <div class="d-flex">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/" id="beranda-link">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#tentang-kami-section">Tentang Kami</a>
                </li>
            </ul>
        </div>

        <!-- Centered logo -->
        <a class="navbar-brand mx-auto d-none d-lg-block" href="/" id="logo-link">
            <img src="{{ asset('images/logo.png') }}" alt="Abidin JT Logo">
        </a>
        <!-- Mobile logo -->
        <a class="navbar-brand d-lg-none" href="/" id="logo-link-mobile">
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

        <!-- Collapsible menu for mobile -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/" id="beranda-link-mobile">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#tentang-kami-section">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('catalog*') ? 'active' : '' }}" href="/catalog">Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hubungi-kami">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Select the Beranda links and logo links
    const berandaLink = document.getElementById('beranda-link');
    const berandaLinkMobile = document.getElementById('beranda-link-mobile');
    const logoLink = document.getElementById('logo-link');
    const logoLinkMobile = document.getElementById('logo-link-mobile');

    // Function to handle the click behavior
    function handleHomeClick(event) {
        const isHomePage = window.location.pathname === '/';
        if (isHomePage) {
            event.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    }

    // Add click event listeners
    berandaLink.addEventListener('click', handleHomeClick);
    berandaLinkMobile.addEventListener('click', handleHomeClick);
    logoLink.addEventListener('click', handleHomeClick);
    logoLinkMobile.addEventListener('click', handleHomeClick);
});
</script>