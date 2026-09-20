<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
</head>

<body>
    <div class="profile-page">
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

            <header class="profile-page__hero">
                <div class="profile-page__hero-content">
                    <p class="profile-page__eyebrow">Your TravelTogether account</p>
                    <h1><?= old('username', $user['username']) ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="profile-page__breadcrumb">
                            <li><a href="<?= base_url('home') ?>">Home</a></li>
                            <li aria-current="page">Update Profile</li>
                        </ol>
                    </nav>
                </div>
            </header>
        </div>

        <main class="profile-page__content">
            <?php if (session()->getFlashdata('success')): ?>
                <div class="profile-page__alert profile-page__alert--success">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <div class="profile-page__layout">
                <aside class="profile-page__card profile-page__identity">
                    <div class="profile-page__avatar" aria-hidden="true">
                        <?= strtoupper(substr(old('username', $user['username']), 0, 1)) ?>
                    </div>
                    <p class="profile-page__eyebrow">Your profile</p>
                    <h2><?= old('username', $user['username']) ?></h2>
                    <p><?= old('email', $user['email']) ?></p>
                </aside>

                <section class="profile-page__card profile-page__form-card">
                    <div class="profile-page__section-heading">
                        <p class="profile-page__eyebrow">Account settings</p>
                        <h2>Update Your Profile</h2>
                    </div>

                    <form method="POST" action="<?= site_url('/update-profile') ?>">
                        <?= csrf_field() ?>

                        <div class="profile-page__fields">
                            <div class="profile-page__field">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" value="<?= old('username', $user['username']) ?>" required>
                                <?php if ($validation->getError('username')): ?>
                                    <div class="profile-page__error"><?= $validation->getError('username') ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="profile-page__field">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="<?= old('email', $user['email']) ?>" required>
                                <?php if ($validation->getError('email')): ?>
                                    <div class="profile-page__error"><?= $validation->getError('email') ?></div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="profile-page__password-section">
                            <h3>Password</h3>
                            <div class="profile-page__fields">
                                <div class="profile-page__field">
                                    <label for="password">New Password (optional)</label>
                                    <div class="profile-page__input-wrap">
                                        <input type="password" id="password" name="password" placeholder="Enter a new password">
                                        <button type="button" class="profile-page__password-toggle" aria-label="Show password" aria-controls="password" aria-pressed="false">Show</button>
                                    </div>
                                    <?php if ($validation->getError('password')): ?>
                                        <div class="profile-page__error"><?= $validation->getError('password') ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="profile-page__field">
                                    <label for="confirm-password">Confirm Password</label>
                                    <div class="profile-page__input-wrap">
                                        <input type="password" id="confirm-password" name="confirm-password">
                                        <button type="button" class="profile-page__password-toggle" aria-label="Show password" aria-controls="confirm-password" aria-pressed="false">Show</button>
                                    </div>
                                    <?php if ($validation->getError('confirm-password')): ?>
                                        <div class="profile-page__error"><?= $validation->getError('confirm-password') ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="profile-page__submit">Update Profile</button>
                    </form>
                </section>
            </div>
        </main>
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
                    <a href="<?= base_url('home') ?>#destination-section">Destination</a>
                    <a href="<?= base_url('home') ?>#trips-section">Trips</a>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.querySelectorAll('.profile-page__password-toggle').forEach(function (toggle) {
            toggle.addEventListener('click', function () {
                const input = document.getElementById(this.getAttribute('aria-controls'));
                const visible = input.type === 'text';
                input.type = visible ? 'password' : 'text';
                this.textContent = visible ? 'Show' : 'Hide';
                this.setAttribute('aria-label', visible ? 'Show password' : 'Hide password');
                this.setAttribute('aria-pressed', String(!visible));
            });
        });
    </script>
</body>

</html>
