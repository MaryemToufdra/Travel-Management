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
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>



    <div class="bookings-page">
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
                                    <a href="home#destination-section" class="dropdown-item">Destination</a>
                                    <a href="/booking" class="dropdown-item">Booking</a>
                                    <a href="#trips-section" class="dropdown-item">Trips</a>
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

            <header class="bookings-page__hero">
                <div class="bookings-page__hero-content">
                    <p class="bookings-page__eyebrow">Your travel plans</p>
                    <h1>Booking</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="bookings-page__breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Pages</a></li>
                            <li aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </header>
        </div>
    </div>

    <main class="bookings-page__content">
        <div class="bookings-page__heading">
            <p class="bookings-page__eyebrow">TravelTogether</p>
            <h2>My Bookings</h2>
        </div>

        <?php if (session()->getFlashdata('booking_success')): ?>
            <div class="bookings-page__alert">
                <?= session()->getFlashdata('booking_success') ?>
            </div>
        <?php endif; ?>

        <div class="bookings-page__table-wrap">
            <table class="bookings-page__table">
                <thead>
                    <tr>
                        <th>Trip</th>
                        <th>Status</th>
                        <th>Schedule</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($bookings)): ?>
                        <?php foreach ($bookings as $booking): ?>
                            <tr>
                                <td data-label="Trip"><?= esc($booking['voyages']) ?></td>
                                <td data-label="Status"><span class="bookings-page__status"><?= esc($booking['status']) ?></span></td>
                                <td data-label="Schedule"><?= esc($booking['schedule']) ?></td>
                                <td data-label="Action">
                                    <a href="javascript:void(0);" class="bookings-page__delete" data-id="<?= $booking['id']?>" onclick="confirmationDeleteBook(event, this)">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr class="bookings-page__empty-row">
                            <td colspan="4">
                                <div class="bookings-page__empty">
                                    <i class="fa fa-suitcase-rolling" aria-hidden="true"></i>
                                    <strong>You have no bookings yet.</strong>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>

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
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
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