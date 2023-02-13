<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Delivery</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Response</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link">Accueil</a>
                        </li>
                        <li class="nav__item">
                            <a href="expédier.php" class="nav__link">Expédier</a>
                        </li>
                        <li class="nav__item">
                            <a href="suivre.php" class="nav__link active-link">Suivre</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contactez-nous</a>
                        </li>

                        <i class='bx bx-toggle-left change-theme' id="theme-button"></i>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

                <a href="#" class="button button__header">Expédier!</a>
            </nav>
        </header>

        <main class="main">
            

            <!--=============== CONTACT US ===============-->
            <section class="contact section container" id="contact">
                <div class="contact__container grid">
                    <div class="contact__content">
                        <h2 class="section__title-center">Contactez-nous <br> Ici</h2>
                        <p class="contact__description">Vous pouvez nous contacter à partir d'ici, vous pouvez nous écrire,
                            appelez-nous ou visitez notre centre de service, nous nous ferons un plaisir de vous aider.</p>
                    </div>

                    <ul class="contact__content grid">
                        <li class="contact__address">Telephone: <span class="contact__information">999 - 888 - 777</span></li>
                        <li class="contact__address">Email:  <span class="contact__information">delivery@email.com</span></li>
                        <li class="contact__address">Location: <span class="contact__information">Yaoundé-Cameroun</span></li>
                    </ul>

                    <div class="contact__content">
                        <a href="#" class="button">Contacter</a>
                    </div>
                </div>
            </section>
        </main>

        <!--=============== FOOTER ===============-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Delivery</a>
                    <p class="footer__description">Expédier la nouvelle paire de Jordan 12, des livres, des appareils à vos proches  <br> ou à vos clients partout au Cameroun !</p>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Nos Services</h3>
                    <ul class="footer__links">
                        <li><a href="#" class="footer__link"> </a></li>
                        <li><a href="#" class="footer__link"></a></li>
                        <li><a href="#" class="footer__link"></a></li>
                        <li><a href="#" class="footer__link"></a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">A Propos Nous</h3>
                    <ul class="footer__links">
                        <li><a href="#" class="footer__link"></a></li>
                        <li><a href="#" class="footer__link"></a></li>
                        <li><a href="#" class="footer__link"></a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Community</h3>
                    <ul class="footer__links">
                        <li><a href="#" class="footer__link"></a></li>
                        <li><a href="#" class="footer__link"></a></li>
                        <li><a href="#" class="footer__link"></a></li>
                    </ul>
                </div>

                <div class="footer__social">
                    <a href="#" class="footer__social-link"><i class='bx bxl-facebook-circle '></i></a>
                    <a href="#" class="footer__social-link"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="footer__social-link"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>

            <p class="footer__copy">&#169;  All right reserved</p>
        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-up-arrow-alt scrollup__icon'></i>
        </a>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>