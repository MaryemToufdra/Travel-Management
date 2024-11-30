<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer un voyage</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h1 class="text-center mb-4">Éditer un Voyage</h1>

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
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" value="<?= esc($voyage['titre']); ?>" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" required><?= esc($voyage['description']); ?></textarea>
        </div>

        <div class="form-group">
            <label for="date_depart">Date de départ</label>
            <input type="date" name="date_depart" id="date_depart" class="form-control" value="<?= esc($voyage['date_depart']); ?>" required>
        </div>

        <div class="form-group">
            <label for="date_retour">Date de retour</label>
            <input type="date" name="date_retour" id="date_retour" class="form-control" value="<?= esc($voyage['date_retour']); ?>" required>
        </div>

        <div class="form-group">
            <label for="lieu">Lieu</label>
            <input type="text" name="lieu" id="lieu" class="form-control" value="<?= esc($voyage['lieu_voyage']); ?>" required>
        </div>

        <div class="form-group">
    <label for="images">Image actuelle</label>
    <?php if (!empty($voyage['images'])): ?>
        <div class="mb-3">
            <img src="<?= base_url('uploads/' . $voyage['images']); ?>" alt="Image actuelle" class="img-thumbnail" width="150">
        </div>
    <?php endif; ?>
    <label for="images">Nouvelle Image (optionnelle)</label>
    <input type="file" name="images" id="images" class="form-control">
</div>



        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
