  
  
  <?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-semibold mb-4">My Account</h1>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <form action="<?= site_url('update-profile') ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>
        
        <div class="mb-4">
            <label for="username" class="block text-sm">Username</label>
            <input type="text" name="username" id="username" value="<?= old('username', $user['username']) ?>" class="w-full px-4 py-2 border border-gray-300 rounded">
            <div class="text-red-500 text-sm"><?= isset($validation) ? $validation->getError('username') : ''  ?></div>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm">Password</label>
            <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-gray-300 rounded">
            <div class="text-red-500 text-sm"><?=  isset($validation) ? $validation->getError('password') : ''?></div>
        </div>

        <div class="mb-4">
            <label for="profile_image" class="block text-sm">Profile Image</label>
            <input type="file" name="profile_image" id="profile_image" class="w-full px-4 py-2 border border-gray-300 rounded">
            <div class="text-red-500 text-sm"><?= isset($validation) ? $validation->getError('profile_image') : '' ?></div>
        </div>

        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded">Update Profile</button>
    </form>
</div>
<?= $this->endSection() ?>
