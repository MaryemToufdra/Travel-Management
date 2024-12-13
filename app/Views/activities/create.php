<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>
<script type="text/javascript">
    <?php if (session()->getFlashdata('success')): ?>
        alert('<?= session()->getFlashdata('success'); ?>');
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        alert('<?= session()->getFlashdata('error'); ?>');
    <?php endif; ?>
</script>



<div class="container my-5">
    <div id="addActivityForm" class="card p-4 shadow" style="max-width: 600px; margin: auto;">
        <h3 class="text-center mb-4">Add activity</h3>
        <form action="/activity/store" method="post">
            <!-- Catégorie -->
            <div class="mb-3">
                <label for="categorySelect" class="form-label">Categorie :</label>
                <select id="categorySelect" name="category_id" class="form-select" required>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <!-- Nom de l'activité -->
            <div class="mb-3">
                <label for="activityName" class="form-label">Name of activity :</label>
                <input type="text" id="activityName" name="activityName" class="form-control" required>
            </div>
            <!-- Description -->
            <div class="mb-3">
                <label for="activityDescription" class="form-label">Description :</label>
                <textarea id="activityDescription" name="activityDescription" class="form-control" rows="3" required></textarea>
            </div>
            <!-- Date -->
            <div class="mb-3">
                <label for="date" class="form-label">Date :</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>
    <div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">Save</button>
    <button type="button" class="btn btn-secondary ms-3" onclick="window.location.href='/accueil'" style="margin-left: 10px;">Cancel</button>
</div>

        </form>
    </div>
</div>

</body>
</html>
