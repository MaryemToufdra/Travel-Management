<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer une activité</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h1 class="text-center mb-4">Éditer une Activité</h1>
    <script type="text/javascript">
    <?php if (session()->getFlashdata('success')): ?>
        alert('<?= session()->getFlashdata('success'); ?>');
    <?php endif; ?>
    
    <?php if (session()->getFlashdata('error')): ?>
        alert('<?= session()->getFlashdata('error'); ?>');
    <?php endif; ?>
</script>


    <!-- Formulaire d'édition avec données pré-remplies -->
    <form action="/activities/update/<?= $activity['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="name">Nom de l'activité</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= esc($activity['name']); ?>" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required><?= esc($activity['description']); ?></textarea>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control" value="<?= esc($activity['date']); ?>" required>
        </div>

        <div class="form-group">
            <label for="category_id">Catégorie</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <option value="1" <?= ($activity['category_id'] == 1) ? 'selected' : ''; ?>>Randonnée</option>
                <option value="2" <?= ($activity['category_id'] == 2) ? 'selected' : ''; ?>>Plongée</option>
                <!-- Ajoutez ici d'autres catégories si nécessaire -->
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-secondary  " style="margin-left: 10px;" onclick="window.location.href='/accueil'">Cancel</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
