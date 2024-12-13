<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style2.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</head>
<body>
    <div class="login-container">
        <h1 class="title">Login</h1>
        
        <!-- Bloc d'alerte d'erreur -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show shadow-sm mb-3" role="alert" style="border-left: 5px solid #dc3545;">
                <div class="d-flex align-items-center">
                    <i class="bi bi-exclamation-circle-fill me-2" style="font-size: 1.5rem; color: #dc3545;"></i>
                    <div>
                        <?= session()->getFlashdata('error') ?>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form class="login-form" method="POST" action="<?= site_url('/seconnecter') ?>">
            <?= csrf_field() ?>
            <div class="input-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Enter your Email">
            </div>
            <div class="input-group mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <div class="signup-link mt-3">
            <p>Don't have an account? <a href="/signup">Sign up</a></p>
        </div>  

        <div class="images mt-4 text-center">
            <img src="<?= base_url('public/uploads/globe.png') ?>" alt="Plane Icon" class="plane-icon me-2" style="width: 50px;">
            <img src="<?= base_url('public/uploads/travel-insurance.png') ?>" alt="Suitcase Icon" class="suitcase-icon" style="width: 50px;">
        </div>
    </div>
</body>
</html>
