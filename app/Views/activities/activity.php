<div class="container my-5">
   
    <?php if (empty($activities)): ?>
        <p>No activities found.</p>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped table-sm" id="dataTable">
                <thead class="thead-dark bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Activity Name</th>
                        <th>Description</th>
                        
                        <th>Date</th>
                        <th>Category</th>  <!-- Nouvelle colonne pour la catégorie -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($activities as $activity): ?>
                        <tr>
                            <td><?= $activity['id'] ?></td>
                            <td><?= $activity['name'] ?></td>
                            <td><?= $activity['description'] ?></td>
                            <td><?= date("Y-m-d", strtotime($activity['date'])) ?></td>
                            <td><?= $activity['category_name'] ?></td>  <!-- Afficher le nom de la catégorie -->
                            <td>
                                <a href="/activities/edit/<?= $activity['id'] ?>" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <a href="/activities/delete/<?= $activity['id'] ?>" class="btn btn-danger btn-sm"  data-id="<?= $activity['id'] ?>" onclick="confirmDelete1(event, this)">
                                    <i class="bi bi-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>
