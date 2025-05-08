<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Close navbar on link click in mobile view
        const navLinks = document.querySelectorAll('.nav-link');
        const navbarCollapse = document.getElementById('navbarNav');
        const navbarToggler = document.querySelector('.navbar-toggler');

        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.getComputedStyle(navbarToggler).display !== 'none' && navbarCollapse.classList.contains('show')) {
                    navbarToggler.click(); // Programmatically click the toggler to collapse
                }
            });
        });
    });
</script>