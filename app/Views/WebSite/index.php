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
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="<?= base_url('img/about.jpg') ?>" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">TravelTogether</span></h1>
                    <p class="mb-4">Your adventure begins here! Explore unique destinations and enjoy exclusive experiences</p>
                    <p class="mb-4"> Let us guide you through unforgettable trips with hand-picked services that cater to your every need</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
            <h1 class="mb-5">Our Services</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5>Global Travel Services</h5>
                        <p>Explore a wide range of global travel options to suit every type of traveler. From group tours to solo adventures, we have something for everyone.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                        <h5>Hotel Bookings</h5>
                        <p>Book the best hotels worldwide with us, ensuring top-notch accommodations for your travel comfort and convenience.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user text-primary mb-4"></i>
                        <h5>Experienced Travel Guides</h5>
                        <p>Our professional travel guides ensure a unique and educational experience for all your destinations, making your trip more enriching.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                        <h5>Event Coordination</h5>
                        <p>From business meetings to large conferences, we offer comprehensive event management services to ensure seamless execution.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5>Global Travel Services</h5>
                        <p>Explore a wide range of global travel options to suit every type of traveler. From group tours to solo adventures, we have something for everyone.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                        <h5>Hotel Bookings</h5>
                        <p>Book the best hotels worldwide with us, ensuring top-notch accommodations for your travel comfort and convenience.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user text-primary mb-4"></i>
                        <h5>Experienced Travel Guides</h5>
                        <p>Our professional travel guides ensure a unique and educational experience for all your destinations, making your trip more enriching.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                        <h5>Event Coordination</h5>
                        <p>From business meetings to large conferences, we offer comprehensive event management services to ensure seamless execution.</p>
                    </div>
                </div>
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
  <div class="container-xxl py-5 destination" id="destination-section">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
            <h1 class="mb-5">Popular Destinations</h1>
        </div>
        <div class="row g-5">
            <?php foreach ($destinations as $destination): ?>
                <div class="col-lg-4 col-md-6">
                    <a class="position-relative d-block overflow-hidden" href="">
                        <img class="img-fluid img-size rounded" src="<?= base_url('uploads/' . $destination['images']) ?>" alt="<?= esc($destination['lieu_voyage']) ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
    <div class="container-xxl py-5" id="trips-section">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Trips</h6>
            <h1 class="mb-5">Awesome Trips</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach($destinations as $destination): ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?= base_url('uploads/' . $destination['images']) ?>" alt="<?= esc($destination['lieu_voyage']) ?>">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i><?= esc($destination['lieu_voyage']) ?></small>
                                                <?php
                            $dateDepart = new DateTime($destination['date_depart']);
                            $dateRetour = new DateTime($destination['date_retour']);
                            $interval = $dateDepart->diff($dateRetour);
                            $nbJours = $interval->days; // Calcul du nombre de jours
                        ?>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i><?= $nbJours ?> days</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i><?= esc($destination['nbr_max_personnes']) ?> Person</small>
                    </div>
                    <div class="text-center p-4">
                        <h3 class="mb-0"><?= number_format($destination['budget'], 2) ?> DH</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <p><?= esc($destination['description'])?></p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="<?= base_url('book/' . $destination['id']) ?>" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
   
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Section Company -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Company</h4>
                <a class="btn btn-link text-light" href="<?= base_url('about') ?>">About Us</a>
                <a class="btn btn-link text-light" href="<?= base_url('contact') ?>">Contact Us</a>
            </div>

            <!-- Section Contact -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Agadir, Morocco</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+212 0709606308</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>maryem.toufdra@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://twitter.com/yourprofile" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://facebook.com/yourprofile" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://youtube.com/yourprofile" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://linkedin.com/in/yourprofile" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Gallery</h4>
                <div class="row g-2 pt-2">
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="<?= base_url('img/package-1.jpg') ?>" alt="Gallery image 1">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="<?= base_url('img/package-2.jpg') ?>" alt="Gallery image 2">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="<?= base_url('img/package-3.jpg') ?>" alt="Gallery image 3">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="<?= base_url('img/package-2.jpg') ?>" alt="Gallery image 4">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="<?= base_url('img/package-3.jpg') ?>" alt="Gallery image 5">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid bg-light p-1" src="<?= base_url('img/package-1.jpg') ?>" alt="Gallery image 6">
                    </div>
                </div>
            </div>

            <!-- Section Newsletter -->
            
        </div>
    </div>

    <!-- Section Copyright -->
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="<?= base_url('home') ?>">TravelTogether</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!-- Optional footer links or information -->
                </div>
            </div>
        </div>
    </div>
</div>

    
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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