<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Create an Account</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/auth.css') ?>">
</head>
<body>
    <main class="auth-page auth-page--signup">
        <section class="auth-panel auth-panel--image auth-panel--image-signup" aria-label="Travel management">
            <div class="auth-panel__overlay"></div>
            <div class="auth-panel__content">
                <p class="auth-eyebrow">Your adventure starts here</p>
                <h1>Start your journey.</h1>
                <p>Create an account to book trips, follow your plans, and discover new destinations.</p>
            </div>
        </section>

        <section class="auth-panel auth-panel--form">
            <div class="login-container signup-container">
                <div class="brand-mark" aria-hidden="true">
                    <i class="fas fa-compass"></i>
                </div>
                <p class="auth-eyebrow">Join the journey</p>
                <h2>Create an Account</h2>
                <p class="auth-intro">Save your favorite trips and make every journey memorable.</p>

                <form class="signup-form" action="<?= site_url('/register') ?>" method="POST">
                    <?= csrf_field() ?>

                    <div class="input-group">
                        <label for="username">Username</label>
                        <div class="input-control">
                            <i class="fas fa-user" aria-hidden="true"></i>
                            <input type="text" id="username" name="username" required placeholder="Enter your username" value="<?= old('username') ?>" autocomplete="username">
                        </div>
                        <?php if (isset($validation) && $validation->getError('username')): ?>
                            <span class="field-error"><?= $validation->getError('username') ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="input-group">
                        <label for="email">Email</label>
                        <div class="input-control">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                            <input type="email" id="email" name="email" required placeholder="Enter your email" value="<?= old('email') ?>" autocomplete="email">
                        </div>
                        <?php if (isset($validation) && $validation->getError('email')): ?>
                            <span class="field-error"><?= $validation->getError('email') ?></span>
                        <?php endif; ?>
                    </div>

                    <div class="signup-fields signup-fields--passwords">
                        <div class="input-group">
                            <label for="password">Password</label>
                            <div class="input-control">
                                <i class="fas fa-lock" aria-hidden="true"></i>
                                <input type="password" id="password" name="password" required placeholder="Enter your password" autocomplete="new-password">
                                <button type="button" class="password-toggle" aria-label="Show password" aria-controls="password" aria-pressed="false">
                                    <i class="fas fa-eye" aria-hidden="true"></i>
                                </button>
                            </div>
                            <?php if (isset($validation) && $validation->getError('password')): ?>
                                <span class="field-error"><?= $validation->getError('password') ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="input-group">
                            <label for="confirm-password">Confirm Password</label>
                            <div class="input-control">
                                <i class="fas fa-lock" aria-hidden="true"></i>
                                <input type="password" id="confirm-password" name="confirm-password" required placeholder="Confirm your password" autocomplete="new-password">
                                <button type="button" class="password-toggle" aria-label="Show password" aria-controls="confirm-password" aria-pressed="false">
                                    <i class="fas fa-eye" aria-hidden="true"></i>
                                </button>
                            </div>
                            <?php if (isset($validation) && $validation->getError('confirm-password')): ?>
                                <span class="field-error"><?= $validation->getError('confirm-password') ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <button type="submit" class="login-button signup-button">Create Account</button>
                </form>

                <p class="auth-switch">
                    Already have an account?
                    <a href="<?= site_url('/loginP') ?>">Sign in</a>
                </p>
                <a class="website-link" href="<?= base_url('home') ?>">
                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                    Go to Website
                </a>
            </div>
        </section>
    </main>

    <script>
        document.querySelectorAll('.password-toggle').forEach(function (toggle) {
            toggle.addEventListener('click', function () {
                const passwordInput = document.getElementById(this.getAttribute('aria-controls'));
                const isPasswordVisible = passwordInput.type === 'text';

                passwordInput.type = isPasswordVisible ? 'password' : 'text';
                this.setAttribute('aria-label', isPasswordVisible ? 'Show password' : 'Hide password');
                this.setAttribute('aria-pressed', String(!isPasswordVisible));
                this.querySelector('i').className = isPasswordVisible ? 'fas fa-eye' : 'fas fa-eye-slash';
            });
        });

        window.onload = function() {
            <?php if (session()->getFlashdata('success')): ?>
                alert('<?= session()->getFlashdata('success'); ?>');
            <?php endif; ?>

            <?php if (isset($validation) && $validation->getErrors()): ?>
                alert('<?= implode("\n", $validation->getErrors()); ?>');
            <?php endif; ?>
        };
    </script>
</body>
</html>
