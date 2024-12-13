<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>">
  
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


    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if (isset($error_message)) : ?>
            <p class="error"><?= htmlspecialchars($error_message) ?></p>
        <?php endif; ?>
        <form action="LoginController/authenticate" method="POST">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="row">
          <div class="col-8">
            <a href="/loginP">Go to Website</a>
          </div>
            <button type="submit">Login</button>
        </form>

    </div>
</body>
</html>
