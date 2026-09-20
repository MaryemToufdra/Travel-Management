<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TravelTogether</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/lib/animate/animate.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style1.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->




    <div class="booking-page">
        <div class="home-shell">
            <nav class="home-navbar" aria-label="Main navigation">
                <div class="home-navbar__inner">
                    <a href="" class="home-brand">
                        <span class="home-brand__icon"><i class="fa fa-map-marker-alt" aria-hidden="true"></i></span>
                        <span>TravelTogether</span>
                    </a>
                    <button class="home-nav-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars" aria-hidden="true"></span>
                    </button>
                    <div class="home-nav-menu collapse" id="navbarCollapse">
                        <div class="home-nav-links">
                            <a href="/home" class="home-nav-link">Home</a>
                            <a href="/about" class="home-nav-link">About</a>
                            <a href="/service" class="home-nav-link">Services</a>
                            <div class="home-nav-dropdown">
                                <a href="/booking" class="home-nav-link dropdown-toggle active" data-bs-toggle="dropdown">Booking</a>
                                <div class="dropdown-menu m-0">
                                    <a href="destination.html" class="dropdown-item">Destination</a>
                                    <a href="booking.html" class="dropdown-item active">Booking</a>
                                    <a href="team.html" class="dropdown-item">activities</a>
                                </div>
                            </div>
                            <a href="/contact" class="home-nav-link">Contact</a>
                        </div>
                        <div class="home-nav-actions">
                            <?php if (session()->get('isLoggedIn')): ?>
                                <div class="home-profile-dropdown dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                        <img src="<?= base_url('public/uploads/default.jpeg') ?>" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px;">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="/update-profile" class="dropdown-item">Update Profile</a>
                                        <a href="loginP" class="dropdown-item">Logout</a>
                                    </div>
                                </div>
                            <?php else: ?>
                                <a href="<?= base_url('loginP') ?>" class="home-auth-link">Login</a>
                                <a href="<?= base_url('signup') ?>" class="home-auth-button">Sign up</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="booking-page__hero">
                <div class="booking-page__hero-content">
                    <p class="booking-page__eyebrow">Plan your journey</p>
                    <h1>Booking</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="booking-page__breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </header>
        </div>
    </div>
  
    <main class="booking-page__content">
        <div class="booking-page__layout">
            <section class="booking-page__trip-card">
                <h2><?= $destinations['titre'] ?></h2>
                <div class="booking-page__image-wrap">
                    <img src="<?= base_url('public/uploads/' . $destinations['images']) ?>" alt="<?= $destinations['titre'] ?>" width="1200" height="700">
                </div>
                <div class="booking-page__details">
                    <div>
                        <h3>Destination:</h3>
                        <p><?= $destinations['titre'] ?></p>
                    </div>
                    <div>
                        <h3>Date de départ:</h3>
                        <p><?= $destinations['date_depart'] ?></p>
                    </div>
                    <div>
                        <h3>Date de retour:</h3>
                        <p><?= $destinations['date_retour'] ?></p>
                    </div>
                    <div>
                        <h3>Budget:</h3>
                        <p><?= $destinations['budget'] ?> MAD</p>
                    </div>
                    <div>
                        <h3>Lieu de départ:</h3>
                        <p><?= $destinations['lieu_voyage'] ?></p>
                    </div>
                    <div>
                        <h3>Nombre maximum de personnes:</h3>
                        <p><?= $destinations['nbr_max_personnes'] ?></p>
                    </div>
                </div>
            </section>
            <aside class="booking-page__summary">
                <p class="booking-page__eyebrow">Your next adventure</p>
                <h2>Ready to book?</h2>
                <p>Choose your trip and confirm your booking to start planning an unforgettable experience.</p>
                <button onclick="confirmBooking()" class="booking-page__button">Book</button>
            </aside>
        </div>
    </main>
<script>
    function confirmBooking() {
        if (confirm("Are you sure you want to book this trip?")) {
            // Redirect to booking page and pass the destination id
            window.location.href = "/booking/create/<?= $destinations['id'] ?>";
        }
    }
</script>
    <footer class="site-footer">
        <div class="site-footer__inner">
            <div class="site-footer__grid">
                <section class="site-footer__column">
                    <h2>Company</h2>
                    <a href="">About Us</a>
                    <a href="">Contact Us</a>
                    <a href="">Privacy Policy</a>
                    <a href="">Terms & Condition</a>
                    <a href="">FAQs & Help</a>
                </section>
                <section class="site-footer__column">
                    <h2>Contact</h2>
                    <p>Location, City, Country</p>
                    <p>+012 345 67890</p>
                    <p>info@example.com</p>
                    <div class="site-footer__socials">
                        <a href="" aria-label="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="" aria-label="YouTube"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                        <a href="" aria-label="LinkedIn"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    </div>
                </section>
                <section class="site-footer__column">
                    <h2>Gallery</h2>
                    <div class="site-footer__gallery">
                        <img loading="lazy" src="<?= base_url('img/package-1.jpg') ?>" alt="">
                        <img loading="lazy" src="<?= base_url('img/package-2.jpg') ?>" alt="">
                        <img loading="lazy" src="<?= base_url('img/package-3.jpg') ?>" alt="">
                        <img loading="lazy" src="<?= base_url('img/package-2.jpg') ?>" alt="">
                        <img loading="lazy" src="<?= base_url('img/package-3.jpg') ?>" alt="">
                        <img loading="lazy" src="<?= base_url('img/package-1.jpg') ?>" alt="">
                    </div>
                </section>
            </div>
        </div>
        <div class="site-footer__copyright">
            <div class="site-footer__copyright-inner">
                <span>&copy; <a href="https://freewebsitecode.com">Your Site Name</a>, All Right Reserved. Designed By <a href="https://freewebsitecode.com">Free Website Code</a></span>
            </div>
        </div>
    </footer>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" aria-label="Back to top"><i class="bi bi-arrow-up" aria-hidden="true"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets/lib/wow/wow.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/easing/easing.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/waypoints/waypoints.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/owlcarousel/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/tempusdominus/js/moment.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/tempusdominus/js/moment-timezone.min.js')?>"></script>
    <script src="<?=base_url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script>
        const homeNavToggle = document.querySelector('.home-nav-toggle');
        const homeNavMenu = document.getElementById('navbarCollapse');

        if (homeNavToggle && homeNavMenu) {
            homeNavToggle.addEventListener('click', function () {
                const isOpen = homeNavMenu.classList.toggle('is-open');
                this.setAttribute('aria-expanded', String(isOpen));
            });
        }
    </script>
</body>

</html>