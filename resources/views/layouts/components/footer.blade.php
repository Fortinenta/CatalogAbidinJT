<footer class="footer" id="hubungi-kami">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h5 class="footer-title">PT. Abidin Jaya Teknik</h5>
                <p class="footer-description">
                    PT. Jaya Abidin Jaya Teknik menyediakan material teknis untuk proyek kelistrikan, telekomunikasi, dan industri. Kami melayani klien seperti PLN, Telkom, dan Pertamina dengan produk galvanis berkualitas.
                </p>
            </div>
            <div class="footer-section">
                <h5 class="footer-title">Produk Kami</h5>
                <ul class="footer-list">
                    <li><a href="#" class="footer-link">Cross Arm UNP</a></li>
                    <li><a href="#" class="footer-link">Arm Tie</a></li>
                    <li><a href="#" class="footer-link">Baut Double Arming</a></li>
                    <li><a href="#" class="footer-link">Klem Penghalang Panjat</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h5 class="footer-title">Kontak</h5>
                <p class="footer-contact-info"><i class="fas fa-map-marker-alt"></i> Jl. Gajah Mada RT.14 RW.005 No.16, Waru, Sidoarjo</p>
                <p class="footer-contact-info"><i class="fas fa-phone"></i> 0817335284 / 085100500660</p>
                <p class="footer-contact-info"><i class="fas fa-envelope"></i> <a href="mailto:cvabidinjayatehnik@gmail.com" class="footer-link">cvabidinjayatehnik@gmail.com</a></p>
                <p class="footer-contact-info"><i class="fas fa-globe"></i> <a href="http://www.cvabidinjayatehnik.com" class="footer-link">cvabidinjayatehnik.com</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="footer-copyright">© 2025 PT. Abidin Jaya Teknik</p>
            <div class="footer-socials">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer {
        background: #F5F6F5;
        color: #2E7D32;
        padding: 3rem 0 1rem;
        margin-top: auto;
        font-family: 'Inter', sans-serif;
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        gap: 2rem;
        margin-bottom: 1.5rem;
        flex-wrap: wrap;
    }

    .footer-section {
        flex: 1;
        min-width: 200px;
        text-align: center;
    }

    .footer-title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 1.2rem;
        color: #4CAF50;
        margin-bottom: 1rem;
        text-transform: uppercase;
    }

    .footer-description {
        font-size: 0.9rem;
        line-height: 1.5;
        color: #2E7D32;
    }

    .footer-list {
        list-style: none;
        padding: 0;
    }

    .footer-link {
        font-size: 0.9rem;
        color: #2E7D32;
        transition: color 0.3s ease;
        display: block;
        margin-bottom: 0.5rem;
    }

    .footer-link:hover {
        color: #4CAF50;
    }

    .footer-contact-info {
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0.5rem;
    }

    .footer-contact-info i {
        color: #4CAF50;
    }

    .footer-contact-info a {
        color: #2E7D32;
        transition: color 0.3s ease;
    }

    .footer-contact-info a:hover {
        color: #4CAF50;
    }

    .footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1rem;
        border-top: 1px solid #DCEEDC;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .footer-copyright {
        font-size: 0.85rem;
        color: #2E7D32;
    }

    .footer-socials {
        display: flex;
        gap: 1rem;
    }

    .social-icon {
        font-size: 1.2rem;
        color: #2E7D32;
        transition: color 0.3s ease;
    }

    .social-icon:hover {
        color: #4CAF50;
    }

    @media (max-width: 991.98px) {
        .footer-content {
            flex-direction: column;
            text-align: center;
        }

        .footer-section {
            margin-bottom: 1.5rem;
        }

        .footer-bottom {
            flex-direction: column;
            gap: 0.75rem;
        }
    }
</style>