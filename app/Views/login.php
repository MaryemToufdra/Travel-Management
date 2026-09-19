<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/auth.css') ?>">
</head>
<body>
<script> 
    // Afficher les messages après le chargement complet de la page
    window.onload = function() {
        <?php if (session()->getFlashdata('success')): ?>
            alert('Success: <?= session()->getFlashdata('success'); ?>');
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            alert('Error: <?= session()->getFlashdata('error'); ?>');
        <?php endif; ?>

        <?php if (isset($validation) && $validation->getErrors()): ?>
            alert('Validation Errors: <?= implode("\n", $validation->getErrors()); ?>');
        <?php endif; ?>
    };
</script>

    <main class="auth-page">
        <section class="auth-panel auth-panel--image" aria-label="Travel management">
            <div class="auth-panel__overlay"></div>
            <div class="auth-panel__content">
                <p class="auth-eyebrow">Travel management</p>
                <h1>Plan every journey with confidence.</h1>
                <p>Manage destinations, bookings, and experiences from one secure space.</p>
            </div>
        </section>

        <section class="auth-panel auth-panel--form">
            <div class="login-container">
                <div class="brand-mark" aria-hidden="true">
                    <i class="fas fa-compass"></i>
                </div>
                <p class="auth-eyebrow">Administration</p>
                <h2>Admin Login</h2>
                <p class="auth-intro">Sign in to manage your travel platform.</p>

                <?php if (isset($error_message)) : ?>
                    <p class="error" role="alert"><?= htmlspecialchars($error_message) ?></p>
                <?php endif; ?>

                <form action="LoginController/authenticate" method="POST">
                    <div class="input-group">
                        <label for="username">Username</label>
                        <div class="input-control">
                            <i class="fas fa-user" aria-hidden="true"></i>
                            <input type="text" id="username" name="username" placeholder="Username" autocomplete="username" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <div class="input-control">
                            <i class="fas fa-lock" aria-hidden="true"></i>
                            <input type="password" id="password" name="password" placeholder="Password" autocomplete="current-password" required>
                            <button type="button" class="password-toggle" aria-label="Show password" aria-controls="password" aria-pressed="false">
                                <i class="fas fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <button class="login-button" type="submit">Login</button>
                </form>

                <a class="website-link" href="<?= base_url('loginP') ?>">
                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                    Go to Website
                </a>
            </div>
        </section>
    </main>

    <script>
        const passwordInput = document.getElementById('password');
        const passwordToggle = document.querySelector('.password-toggle');

        passwordToggle.addEventListener('click', function () {
            const isPasswordVisible = passwordInput.type === 'text';
            passwordInput.type = isPasswordVisible ? 'password' : 'text';
            this.setAttribute('aria-label', isPasswordVisible ? 'Show password' : 'Hide password');
            this.setAttribute('aria-pressed', String(!isPasswordVisible));
            this.querySelector('i').className = isPasswordVisible ? 'fas fa-eye' : 'fas fa-eye-slash';
        });
    </script>
</body>
</html>
