<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TravelTogether</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('img/favicon.ico') ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
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
    

    <div class="about-page">
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
                            <a href="/about" class="home-nav-link active">About</a>
                            <a href="/service" class="home-nav-link">Services</a>
                            <div class="home-nav-dropdown">
                                <a href="/booking" class="home-nav-link dropdown-toggle" data-bs-toggle="dropdown">Booking</a>
                                <div class="dropdown-menu m-0">
                                    <a href="home#destination-section" class="dropdown-item">Destination</a>
                                    <a href="/booking" class="dropdown-item">Booking</a>
                                    <a href="home#trips-section" class="dropdown-item">Trips</a>
                                </div>
                            </div>
                            <a href="/contact" class="home-nav-link">Contact</a>
                        </div>
                        <div class="home-nav-actions">
                            <a href="<?= base_url('loginP') ?>" class="home-auth-link">Login</a>
                            <a href="<?= base_url('signup') ?>" class="home-auth-button">Sign up</a>
                            <div class="home-profile-dropdown dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <img src="<?= base_url('public/uploads/default.jpeg') ?>" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px;">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="/update-profile" class="dropdown-item">Update Profile</a>
                                    <a href="loginP" class="dropdown-item">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <header class="about-page__hero">
                <div class="about-page__hero-content">
                    <p class="about-page__eyebrow">Discover TravelTogether</p>
                    <h1>About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="about-page__breadcrumb">
                            <li><a href="/home">Home</a></li>
                            <li aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </header>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <main class="about-page__content">
    <section class="container-xxl about-page__intro">
        <div class="container">
            <div class="row about-page__intro-row">
                <div class="col-lg-6 about-page__intro-media wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-page__intro-image-wrap">
                    <img class="about-page__intro-image" src="<?= base_url('img/about.jpg') ?>" alt="" loading="lazy" width="700" height="700">
                    </div>
                </div>
                <div class="col-lg-6 about-page__intro-content wow fadeInUp" data-wow-delay="0.3s">
                    <p class="about-page__eyebrow">About Us</p>
                    <h2>Welcome to <span>TravelTogether</span></h2>
                    <p>Your adventure begins here! Explore unique destinations and enjoy exclusive experiences</p>
                    <p> Let us guide you through unforgettable trips with hand-picked services that cater to your every need</p>
                    <div class="about-page__features">
                        <div class="col-sm-6">
                            <p><i class="fa fa-check" aria-hidden="true"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p><i class="fa fa-check" aria-hidden="true"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p><i class="fa fa-check" aria-hidden="true"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p><i class="fa fa-check" aria-hidden="true"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="col-sm-6">
                            <p><i class="fa fa-check" aria-hidden="true"></i>150 Premium City Tours</p>
                        </div>
                        <div class="col-sm-6">
                            <p><i class="fa fa-check" aria-hidden="true"></i>24/7 Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Team Start -->
    <section class="container-xxl about-page__team">
    <div class="container">
        <div class="about-page__section-heading text-center wow fadeInUp" data-wow-delay="0.1s">
            <p class="about-page__eyebrow">Travel Guide</p>
            <h2>Meet Our Guide</h2>
        </div>
        <div class="about-page__team-grid">
            <article class="about-page__team-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-page__team-image-wrap">
                        <img src="<?= base_url('public/img/team-1.jpg') ?>" alt="" loading="lazy" width="600" height="600">
                    </div>
                    <div class="about-page__team-socials">
                        <a href="" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="" aria-label="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </div>
                    <div class="about-page__team-info">
                        <h3>John Doe</h3>
                        <small>Senior Travel Guide</small>
                    </div>
            </article>
            <article class="about-page__team-card wow fadeInUp" data-wow-delay="0.3s">
                    <div class="about-page__team-image-wrap">
                        <img src="<?= base_url('public/img/team-2.jpg') ?>" alt="" loading="lazy" width="600" height="600">
                    </div>
                    <div class="about-page__team-socials">
                        <a href="" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="" aria-label="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </div>
                    <div class="about-page__team-info">
                        <h3>Jane Smith</h3>
                        <small>Local Expert</small>
                    </div>
            </article>
            <article class="about-page__team-card wow fadeInUp" data-wow-delay="0.5s">
                    <div class="about-page__team-image-wrap">
                        <img src="<?= base_url('public/img/team-3.jpg') ?>" alt="" loading="lazy" width="600" height="600">
                    </div>
                    <div class="about-page__team-socials">
                        <a href="" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="" aria-label="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </div>
                    <div class="about-page__team-info">
                        <h3>Robert Brown</h3>
                        <small>Adventure Specialist</small>
                    </div>
            </article>
            <article class="about-page__team-card wow fadeInUp" data-wow-delay="0.7s">
                    <div class="about-page__team-image-wrap">
                        <img src="<?= base_url('public/img/team-4.jpg') ?>" alt="" loading="lazy" width="600" height="600">
                    </div>
                    <div class="about-page__team-socials">
                        <a href="" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="" aria-label="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    </div>
                    <div class="about-page__team-info">
                        <h3>Emily Johnson</h3>
                        <small>Travel Coordinator</small>
                    </div>
            </article>
        </div>
    </div>
    </section>
    </main>

    <!-- Team End -->
        

    <footer class="site-footer">
        <div class="site-footer__inner">
            <div class="site-footer__grid">
                <section class="site-footer__column">
                    <h2>Company</h2>
                    <a href="/about">About Us</a>
                    <a href="/contact">Contact Us</a>
                    <div class="site-footer__contact">
                        <h2>Contact</h2>
                        <p><i class="fa fa-map-marker-alt" aria-hidden="true"></i>Agadir, Morocco</p>
                        <p><i class="fa fa-phone-alt" aria-hidden="true"></i>+212 0709606308</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>maryem.toufdra@gmail.com</p>
                    </div>
                    <div class="site-footer__socials">
                        <a href="https://twitter.com/yourprofile" target="_blank" aria-label="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://facebook.com/yourprofile" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="https://youtube.com/yourprofile" target="_blank" aria-label="YouTube"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                        <a href="https://linkedin.com/in/yourprofile" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    </div>
                </section>
                <section class="site-footer__column">
                    <h2>Quick Links</h2>
                    <a href="/home">Home</a>
                    <a href="/about">About Us</a>
                    <a href="/contact">Contact Us</a>
                </section>
                <section class="site-footer__column">
                    <h2>Services</h2>
                    <a href="/service">Services</a>
                    <a href="/booking">Booking</a>
                    <a href="home#destination-section">Destination</a>
                    <a href="home#trips-section">Trips</a>
                </section>
                <section class="site-footer__column">
                    <h2>Gallery</h2>
                    <div class="site-footer__gallery">
                        <img loading="lazy" src="<?= base_url('img/package-1.jpg') ?>" alt="Gallery image 1">
                        <img loading="lazy" src="<?= base_url('img/package-2.jpg') ?>" alt="Gallery image 2">
                        <img loading="lazy" src="<?= base_url('img/package-3.jpg') ?>" alt="Gallery image 3">
                        <img loading="lazy" src="<?= base_url('img/package-2.jpg') ?>" alt="Gallery image 4">
                        <img loading="lazy" src="<?= base_url('img/package-3.jpg') ?>" alt="Gallery image 5">
                        <img loading="lazy" src="<?= base_url('img/package-1.jpg') ?>" alt="Gallery image 6">
                    </div>
                </section>
            </div>
        </div>
        <div class="site-footer__copyright">
            <div class="site-footer__copyright-inner">
                <span>&copy; <a href="/home">TravelTogether</a>, All Right Reserved.</span>
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