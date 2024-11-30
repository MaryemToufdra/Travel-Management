<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

</head>
<body>
<?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <!-- Affichage du message d'erreur -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
<div  >
    <div id="addActivityForm" class="card p-4 shadow" style="max-width: 400px;">
        <h3 class="text-center">Ajouter une activité</h3>
        <form action="/activity/store" method="post">
            <div class="mb-3">
                <label for="categorySelect" class="form-label">Catégorie :</label>
                <select id="categorySelect" name="categorySelect" class="form-select">
        <?php
        foreach ($categories as $category): ?>
            <option value="<?= $category['name'] ?>"><?= $category['name'] ?></option>
        <?php endforeach; ?>
</select>

            </div>
            <div class="mb-3">
                <label for="activityName" class="form-label">Nom de l'activité :</label>
                <input type="text" id="activityName" name="activityName" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="activityDescription" class="form-label">Description :</label>
                <textarea id="activityDescription" name="activityDescription" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control"  required>
        </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Enregistrer</button>
            </div>
        </form>
    </div>
</div>




</body>
</html>
