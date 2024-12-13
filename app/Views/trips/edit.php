<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Trip</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h1 class="text-center mb-4">Update Trip</h1>

    <!-- Affichage des erreurs de validation -->
    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Formulaire d'édition avec données pré-remplies -->
    <form action="/trips/update/<?= $voyage['id']; ?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="form-group">
            <label for="titre">Title</label>
            <input type="text" name="titre" id="titre" class="form-control" value="<?= esc($voyage['titre']); ?>" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required><?= esc($voyage['description']); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="budget" class="form-label">Budget</label>
            <input type="number" name="budget" id="budget" class="form-control" min="0" step="0.01" value="<?= esc($voyage['budget']); ?>" required>
        </div>
<div class="mb-3">
    <label for="nbr_max_personnes" class="form-label">Max capacity</label>
    <input type="number" name="nbr_max_personnes" id="nbr_max_personnes" class="form-control" value="<?= esc($voyage['nbr_max_personnes']) ?>" min="1" required>
</div>

        <div class="form-group">
            <label for="date_depart">departure date</label>
            <input type="date" name="date_depart" id="date_depart" class="form-control" value="<?= esc($voyage['date_depart']); ?>" required>
        </div>

        <div class="form-group">
            <label for="date_retour">return date</label>
            <input type="date" name="date_retour" id="date_retour" class="form-control" value="<?= esc($voyage['date_retour']); ?>" required>
        </div>

        <div class="form-group">
            <label for="lieu">Place</label>
            <input type="text" name="lieu" id="lieu" class="form-control" value="<?= esc($voyage['lieu_voyage']); ?>" required>
        </div>

        <div class="form-group">
    <label for="images">Current image</label>
    <?php if (!empty($voyage['images'])): ?>
        <div class="mb-3">
            <img src="<?= base_url('uploads/' . $voyage['images']); ?>" alt="Image actuelle" class="img-thumbnail" width="150">
        </div>
    <?php endif; ?>
    <label for="images">New Image (optional)</label>
    <input type="file" name="images" id="images" class="form-control">
</div>



        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-secondary " style="margin-left: 10px;" onclick="window.location.href='/accueil'">Cancel</button>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
