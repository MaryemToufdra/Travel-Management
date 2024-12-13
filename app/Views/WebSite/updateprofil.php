<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style5.css') ?>">

</head>

<body>
    <div class="background"></div>
    <div class="container">
        <h2>Update Your Profile</h2>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        <form method="POST" action="<?= site_url('/update-profile') ?>">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" value="<?= old('username', $user['username']) ?>" required>
                <?php if ($validation->getError('username')): ?>
                    <div class="text-danger"><?= $validation->getError('username') ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="<?= old('email', $user['email']) ?>" required>
                <?php if ($validation->getError('email')): ?>
                    <div class="text-danger"><?= $validation->getError('email') ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="password">New Password (optional)</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter a new password">
                <?php if ($validation->getError('password')): ?>
                    <div class="text-danger"><?= $validation->getError('password') ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" class="form-control">
                <?php if ($validation->getError('confirm-password')): ?>
                    <div class="text-danger"><?= $validation->getError('confirm-password') ?></div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
