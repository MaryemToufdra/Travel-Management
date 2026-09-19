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
    <link rel="stylesheet" href="<?= base_url('assets/css/style1.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">



</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
  
    <div class="services-page">
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
                            <a href="/service" class="home-nav-link active">Services</a>
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

            <header class="services-page__hero">
                <div class="services-page__hero-content">
                    <p class="services-page__eyebrow">Travel with confidence</p>
                    <h1>Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="services-page__breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </header>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Service Start -->
    <main class="services-page__content">
    <section class="container-xxl services-page__services">
        <div class="container">
            <div class="services-page__section-heading text-center wow fadeInUp" data-wow-delay="0.1s">
                <p class="services-page__eyebrow">Services</p>
                <h2>Our Services</h2>
            </div>
            <div class="services-page__grid">
                <article class="services-section__card services-page__card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="services-section__icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                    <h3>WorldWide Tours</h3>
                    <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                </article>
                <article class="services-section__card services-page__card wow fadeInUp" data-wow-delay="0.3s">
                    <div class="services-section__icon"><i class="fa fa-hotel" aria-hidden="true"></i></div>
                    <h3>Hotel Reservation</h3>
                    <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                </article>
                <article class="services-section__card services-page__card wow fadeInUp" data-wow-delay="0.5s">
                    <div class="services-section__icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <h3>Travel Guides</h3>
                    <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                </article>
                <article class="services-section__card services-page__card wow fadeInUp" data-wow-delay="0.7s">
                    <div class="services-section__icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
                    <h3>Event Management</h3>
                    <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                </article>
            </div>
        </div>
    </section>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <section class="container-xxl services-page__testimonials wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="services-page__section-heading text-center">
                <p class="services-page__eyebrow">Testimonial</p>
                <h2>Our Clients Say!!!</h2>
            </div>
            <div class="services-page__testimonial-grid">
                <article class="services-page__testimonial-card">
                    <img src="<?= base_url('public/img/testimonial-1.jpg') ?>" alt="" loading="lazy" width="80" height="80">
                    <h3>John Doe</h3>
                    <p>New York, USA</p>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </article>
                <article class="services-page__testimonial-card">
                    <img src="<?= base_url('public/img/testimonial-2.jpg') ?>" alt="" loading="lazy" width="80" height="80">
                    <h3>John Doe</h3>
                    <p>New York, USA</p>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </article>
                <article class="services-page__testimonial-card">
                    <img src="<?= base_url('public/img/testimonial-3.jpg') ?>" alt="" loading="lazy" width="80" height="80">
                    <h3>John Doe</h3>
                    <p>New York, USA</p>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </article>
                <article class="services-page__testimonial-card">
                    <img src="<?= base_url('public/img/testimonial-4.jpg') ?>" alt="" loading="lazy" width="80" height="80">
                    <h3>John Doe</h3>
                    <p>New York, USA</p>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </article>
            </div>
        </div>
    </section>
    </main>
    <!-- Testimonial End -->
        

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
                        <img loading="lazy" src="<?= base_url('public/img/package-1.jpg') ?>" alt="Gallery image 1">
                        <img loading="lazy" src="<?= base_url('public/img/package-2.jpg') ?>" alt="Gallery image 2">
                        <img loading="lazy" src="<?= base_url('public/img/package-3.jpg') ?>" alt="Gallery image 3">
                        <img loading="lazy" src="<?= base_url('public/img/package-2.jpg') ?>" alt="Gallery image 4">
                        <img loading="lazy" src="<?= base_url('public/img/package-3.jpg') ?>" alt="Gallery image 5">
                        <img loading="lazy" src="<?= base_url('public/img/package-1.jpg') ?>" alt="Gallery image 6">
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