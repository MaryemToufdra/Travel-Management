
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>
<?php if (isset($error)): ?>
    <div class="alert alert-danger">
        <?= $error ?>
    </div>
<?php endif; ?>

<?php if (isset($success)): ?>
    <div class="alert alert-success">
        <?= $success ?>
    </div>
<?php endif; ?>

    <div class="container my-5">
    <h1 class="text-center mb-4">create a trip</h1>
    <form action="/trips/store" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <!-- Titre -->
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" name="titre" id="titre" class="form-control" value="<?= old('titre') ?>" required>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4"  required><?= old('description') ?></textarea>
        </div>
        <!-- Date de départ -->
        <div class="mb-3">
            <label for="date_depart" class="form-label">Date de départ</label>
            <input type="date" name="date_depart" id="date_depart" class="form-control" value="<?= old('date_depart') ?>" required>
        </div>
        <!-- Date de retour -->
        <div class="mb-3">
            <label for="date_retour" class="form-label">Date de retour</label>
            <input type="date" name="date_retour" id="date_retour" class="form-control" value="<?= old('date_retour') ?>" required>
        </div>

        <!-- Destination -->
        <div class="mb-3">
            <label for="lieu" class="form-label">Destination</label>
            <input type="text" name="lieu" id="lieu" class="form-control" value="<?= old('lieu') ?>" required>
        </div>

        <!-- Images -->
        <div class="mb-3">
            <label for="images" class="form-label">Images</label>
            <input type="file" name="images" class="form-control" required>
        </div>

        <!-- Bouton Submit -->
        <div class="d-flex justify-content-end">
          
                <button type="submit" class="btn btn-primary btn-lg">Save</button>
        
            
        </div>
    </form>
    <a href="/accueil">
        <button type="submit" class="btn btn-primary btn-lg">Cancel</button> 
    </a>
   
</div>





</body>
</html>



