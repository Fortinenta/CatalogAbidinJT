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
        <a class="navbar-brand mx-auto" href="/" id="logo-link">
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Select the Beranda link and logo link
    const berandaLink = document.getElementById('beranda-link');
    const logoLink = document.getElementById('logo-link');

    // Function to handle the click behavior
    function handleHomeClick(event) {
        // Check if the current path is the homepage
        const isHomePage = window.location.pathname === '/';

        if (isHomePage) {
            // Prevent default link behavior (reload/redirect)
            event.preventDefault();
            // Scroll to the top of the page smoothly
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        // If not on the homepage, allow the default behavior (redirect to '/')
    }

    // Add click event listeners to both Beranda link and logo link
    berandaLink.addEventListener('click', handleHomeClick);
    logoLink.addEventListener('click', handleHomeClick);
});
</script>