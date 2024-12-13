<div class="container my-5">
    <div class="text-end mb-3">
        <a href="/trips/create" class="btn btn-primary btn-sm btn1">
            <i class="bi bi-plus-circle"></i> Add a Trip
          
        </a>
    </div>
    <?php if (empty($voyages)): ?>
        <p>Aucun voyage trouvé.</p>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped table-sm" id="dataTable">
                <thead class="text-black">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Budget</th>
                        <th>Max capacity</th>
                        <th>departure date</th>
                        <th>return date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($voyages as $voyage): ?>
                        <tr>
                            <td><?= $voyage['id'] ?></td>
                            <td><?= $voyage['titre'] ?></td>
                            <td><?= $voyage['description'] ?></td>
                            <td><?= $voyage['budget'] ?> dh</td>
                            <td><?= $voyage['nbr_max_personnes'] ?></td>
                            <td><?= date("Y-m-d", strtotime($voyage['date_depart'])) ?></td>
                            <td><?= date("Y-m-d", strtotime($voyage['date_retour'])) ?></td>
                            <td>
                                <a href="/trips/edit/<?= $voyage['id'] ?>" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <a href="/trips/delete/<?= $voyage['id'] ?>" class="btn btn-danger btn-sm" data-id="<?= $voyage['id'] ?>" onclick="confirmDelete(event, this)">
                                    <i class="bi bi-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>