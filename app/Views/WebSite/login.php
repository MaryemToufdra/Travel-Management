<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/auth.css') ?>">
</head>
<body>
    <main class="auth-page auth-page--participant">
        <section class="auth-panel auth-panel--form">
            <div class="login-container">
                <div class="brand-mark" aria-hidden="true">
                    <span>+</span>
                </div>
                <p class="auth-eyebrow">Your next adventure</p>
                <h1 class="auth-title">Welcome back</h1>
                <p class="auth-intro">Sign in to discover beautiful destinations and manage your bookings.</p>

                <?php if (session()->getFlashdata('error')): ?>
                    <div class="auth-alert" role="alert">
                        <div class="auth-alert__content">
                            <i class="fas fa-exclamation-circle" aria-hidden="true"></i>
                            <div>
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        </div>
                        <button type="button" class="auth-alert__close" aria-label="Close message">&times;</button>
                    </div>
                <?php endif; ?>

                <form class="login-form" method="POST" action="<?= site_url('/seconnecter') ?>">
                    <?= csrf_field() ?>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <div class="input-control">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            <input type="email" id="email" name="email" placeholder="Enter your Email" autocomplete="email" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <div class="input-control">
                            <i class="fas fa-lock" aria-hidden="true"></i>
                            <input type="password" id="password" name="password" placeholder="Enter your password" autocomplete="current-password" required>
                            <button type="button" class="password-toggle" aria-label="Show password" aria-controls="password" aria-pressed="false">
                                <span aria-hidden="true">Show</span>
                            </button>
                        </div>
                    </div>
                    <button class="login-button" type="submit">Login</button>
                </form>

                <p class="auth-switch">
                    Don't have an account?
                    <a href="<?= site_url('/signup') ?>">Sign up</a>
                </p>
            </div>
        </section>

        <section class="auth-panel auth-panel--image auth-panel--image-participant" aria-label="Moroccan travel destinations">
            <div class="auth-panel__overlay"></div>
            <div class="auth-panel__content">
                <p class="auth-eyebrow">Explore Morocco</p>
                <h2>Collect places, not just plans.</h2>
                <p>From the colors of Marrakech to the shores of Agadir, your next story starts here.</p>
                <div class="destination-pills" aria-hidden="true">
                    <span>Marrakech</span>
                    <span>Agadir</span>
                    <span>Fes</span>
                </div>
            </div>
        </section>
    </main>

    <script>
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.querySelector('.password-toggle');
        const alertClose = document.querySelector('.auth-alert__close');

        passwordToggle.addEventListener('click', function () {
            const isPasswordVisible = passwordInput.type === 'text';
            passwordInput.type = isPasswordVisible ? 'password' : 'text';
            this.setAttribute('aria-label', isPasswordVisible ? 'Show password' : 'Hide password');
            this.setAttribute('aria-pressed', String(!isPasswordVisible));
            this.querySelector('i').className = isPasswordVisible ? 'fas fa-eye' : 'fas fa-eye-slash';
        });

        if (alertClose) {
            alertClose.addEventListener('click', function () {
                this.closest('.auth-alert').remove();
            });
        }
    </script>
</body>
</html>
