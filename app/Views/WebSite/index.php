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
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
<script>
    <?php if (session()->getFlashdata('success')): ?>
            alert('<?= session()->getFlashdata('success'); ?>');
        <?php endif; ?>

</script>
            <div class="home-shell">
                <nav class="home-navbar" aria-label="Main navigation">
                    <div class="home-navbar__inner">
                    <a href="" class="home-brand">
                        <span class="home-brand__icon"><i class="fa fa-map-marker-alt" aria-hidden="true"></i></span>
                        <span>TravelTogether</span>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="home-nav-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars" aria-hidden="true"></span>
                    </button>
                    <div class="home-nav-menu collapse" id="navbarCollapse">
                        <div class="home-nav-links">
                            <a href="<?= base_url('index') ?>" class="home-nav-link active">Home</a>
                            <a href="<?= base_url('about') ?>" class="home-nav-link">About</a>
                            <a href="<?= base_url('service') ?>" class="home-nav-link">Services</a>
                            <div class="home-nav-dropdown">
                                <a href="<?= base_url('booking') ?>" class="home-nav-link dropdown-toggle" data-bs-toggle="dropdown">Booking</a>
                                <div class="dropdown-menu m-0">
                                    <a href="#destination-section" class="dropdown-item">Destination</a>
                                    <a href="<?= base_url('booking') ?>" class="dropdown-item">Booking</a>
                                    <a href="#trips-section" class="dropdown-item">Trips</a>
                                </div>
                            </div>
                            <a href="<?= base_url('contact') ?>" class="home-nav-link">Contact</a>
                        </div>
                        <div class="home-nav-actions">
                            <a href="<?= base_url('loginP') ?>" class="home-auth-link">Login</a>
                            <a href="<?= base_url('signup') ?>" class="home-auth-button">Sign up</a>
                            <div class="home-profile-dropdown dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <img src="<?= base_url('uploads/default.jpeg') ?>" alt="Profile" class="rounded-circle" style="width: 40px; height: 40px;">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="<?= base_url('update-profile') ?>" class="dropdown-item">Update Profile</a>
                                    <a href="<?= base_url('loginP') ?>" class="dropdown-item">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </nav>

                <div class="home-hero">
                    <div class="home-hero__content">
                        <p class="home-eyebrow">Your adventure starts here</p>
                        <h1>Enjoy Your Vacation With Us</h1>
                        <p>Let us help you plan the trip of a lifetime with personalized recommendations</p>
                        <a class="home-hero__button" href="#trips-section">Explore trips</a>
                    </div>
                </div>
            </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl about-section">
        <div class="container">
            <div class="row about-section__row">
                <div class="col-lg-6 about-section__media wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-section__image-wrap">
                        <img class="about-section__image" src="<?= base_url('img/about.jpg') ?>" alt="" loading="lazy" width="700" height="700">
                    </div>
                </div>
                <div class="col-lg-6 about-section__content wow fadeInUp" data-wow-delay="0.3s">
                    <p class="about-section__eyebrow">About Us</p>
                    <h1 class="about-section__title">Welcome to <span>TravelTogether</span></h1>
                    <div class="about-section__copy">
                        <p>Your adventure begins here! Explore unique destinations and enjoy exclusive experiences</p>
                        <p> Let us guide you through unforgettable trips with hand-picked services that cater to your every need</p>
                    </div>
                    <div class="about-section__features">
                        <div class="about-section__feature">
                            <p><i class="fa fa-check" aria-hidden="true"></i>First Class Flights</p>
                        </div>
                        <div class="about-section__feature">
                            <p><i class="fa fa-check" aria-hidden="true"></i>Handpicked Hotels</p>
                        </div>
                        <div class="about-section__feature">
                            <p><i class="fa fa-check" aria-hidden="true"></i>5 Star Accommodations</p>
                        </div>
                        <div class="about-section__feature">
                            <p><i class="fa fa-check" aria-hidden="true"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="about-section__feature">
                            <p><i class="fa fa-check" aria-hidden="true"></i>150 Premium City Tours</p>
                        </div>
                        <div class="about-section__feature">
                            <p><i class="fa fa-check" aria-hidden="true"></i>24/7 Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl services-section">
    <div class="container">
        <div class="services-section__heading text-center">
            <p class="services-section__eyebrow">What we offer</p>
            <h2>Our Services</h2>
        </div>
        <div class="services-section__grid">
            <div class="services-section__card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="services-section__icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                        <h3>Global Travel Services</h3>
                        <p>Explore a wide range of global travel options to suit every type of traveler. From group tours to solo adventures, we have something for everyone.</p>
            </div>
            <div class="services-section__card wow fadeInUp" data-wow-delay="0.3s">
                        <div class="services-section__icon"><i class="fa fa-hotel" aria-hidden="true"></i></div>
                        <h3>Hotel Bookings</h3>
                        <p>Book the best hotels worldwide with us, ensuring top-notch accommodations for your travel comfort and convenience.</p>
            </div>
            <div class="services-section__card wow fadeInUp" data-wow-delay="0.5s">
                        <div class="services-section__icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <h3>Experienced Travel Guides</h3>
                        <p>Our professional travel guides ensure a unique and educational experience for all your destinations, making your trip more enriching.</p>
            </div>
            <div class="services-section__card wow fadeInUp" data-wow-delay="0.7s">
                        <div class="services-section__icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
                        <h3>Event Coordination</h3>
                        <p>From business meetings to large conferences, we offer comprehensive event management services to ensure seamless execution.</p>
            </div>
        </div>
    </div>
</div>

    <script>
    // Afficher les messages après le chargement complet de la page
    window.onload = function() {
        <?php if (session()->getFlashdata('error')): ?>
            alert('<?= session()->getFlashdata('error'); ?>');
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')): ?>
            alert('<?= session()->getFlashdata('success'); ?>');
        <?php endif; ?>

        <?php if (isset($validation) && $validation->getErrors()): ?>
            alert('<?= implode("\n", $validation->getErrors()); ?>');
        <?php endif; ?>
    };
</script>

  <!-- Destination Start -->
  <div class="container-xxl destinations-section" id="destination-section">
    <div class="container">
        <div class="destinations-section__heading text-center wow fadeInUp" data-wow-delay="0.1s">
            <p class="destinations-section__eyebrow">Discover Morocco</p>
            <h2>Popular Destinations</h2>
        </div>
        <div class="destinations-section__grid">
            <?php foreach ($destinations as $destination): ?>
                <div class="destinations-section__card">
                    <a class="destinations-section__link" href="">
                        <img class="destinations-section__image" loading="lazy" src="<?= base_url('uploads/' . $destination['images']) ?>" alt="<?= esc($destination['lieu_voyage']) ?>">
                        <span class="destinations-section__name"><?= esc($destination['lieu_voyage']) ?></span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
    <div class="container-xxl trips-section" id="trips-section">
    <div class="container">
        <div class="trips-section__heading text-center">
            <p class="trips-section__eyebrow">Plan your escape</p>
            <h2>Awesome Trips</h2>
        </div>
        <div class="trips-section__grid">
            <?php foreach($destinations as $destination): ?>
            <article class="trips-section__card wow fadeInUp" data-wow-delay="0.1s">
                <div class="trips-section__image-wrap">
                    <img class="trips-section__image" loading="lazy" src="<?= base_url('uploads/' . $destination['images']) ?>" alt="<?= esc($destination['lieu_voyage']) ?>">
                    <?php
                        $dateDepart = new DateTime($destination['date_depart']);
                        $dateRetour = new DateTime($destination['date_retour']);
                        $interval = $dateDepart->diff($dateRetour);
                        $nbJours = $interval->days; // Calcul du nombre de jours
                    ?>
                    <span class="trips-section__duration"><?= $nbJours ?> days</span>
                </div>
                <div class="trips-section__content">
                    <h3><?= esc($destination['lieu_voyage']) ?></h3>
                    <div class="trips-section__meta">
                        <span><i class="fa fa-user" aria-hidden="true"></i><?= esc($destination['nbr_max_personnes']) ?> Person</span>
                        <span><i class="fa fa-calendar-alt" aria-hidden="true"></i><?= $nbJours ?> days</span>
                    </div>
                    <p class="trips-section__description"><?= esc($destination['description'])?></p>
                    <div class="trips-section__footer">
                        <p class="trips-section__budget"><span>From</span><?= number_format($destination['budget'], 2) ?> DH</p>
                        <a href="<?= base_url('book/' . $destination['id']) ?>" class="trips-section__button">Book Now</a>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</div>
   
    <footer class="site-footer">
        <div class="site-footer__inner">
            <div class="site-footer__grid">
                <section class="site-footer__column">
                    <h2>Company</h2>
                    <a href="<?= base_url('about') ?>">About Us</a>
                    <a href="<?= base_url('contact') ?>">Contact Us</a>
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
                    <a href="<?= base_url('home') ?>">Home</a>
                    <a href="<?= base_url('about') ?>">About Us</a>
                    <a href="<?= base_url('contact') ?>">Contact Us</a>
                </section>

                <section class="site-footer__column">
                    <h2>Services</h2>
                    <a href="<?= base_url('service') ?>">Services</a>
                    <a href="<?= base_url('booking') ?>">Booking</a>
                    <a href="#destination-section">Destination</a>
                    <a href="#trips-section">Trips</a>
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
                <span>&copy; <a href="<?= base_url('home') ?>">TravelTogether</a>, All Right Reserved.</span>
            </div>
        </div>
    </footer>

    
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" aria-label="Back to top"><i class="bi bi-arrow-up" aria-hidden="true"></i></a>
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