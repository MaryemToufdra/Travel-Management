<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style3.css') ?>">
</head>
<body>
    <div class="signup-container">
        <div class="signup-form">
            <h2>Create an Account</h2>
            <form action="<?= site_url('/register') ?>" method="POST">
                <?= csrf_field() ?>

                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Enter your username" value="<?= old('username') ?>">
                    <span class="error"><?= isset($validation) ? $validation->getError('username') : '' ?></span>
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email" value="<?= old('email') ?>">
                    <span class="error"><?= isset($validation) ? $validation->getError('email') : '' ?></span>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                    <span class="error"><?= isset($validation) ? $validation->getError('password') : '' ?></span>
                </div>

                <div class="input-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm-password" required placeholder="Confirm your password">
                    <span class="error"><?= isset($validation) ? $validation->getError('confirm-password') : '' ?></span>
                </div>

                <button type="submit" class="signup-btn">Create Account</button>
            </form>

            <div class="login-link">
                <p>Already have an account? <a href="/loginP">Log in</a></p>
            </div>
        </div>
    </div>
    <script>
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
