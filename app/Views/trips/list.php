<link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
<div class="admin-dashboard admin-dashboard__trips-page">
    <div class="admin-dashboard__trips-content">
        <div class="admin-dashboard__page-heading admin-dashboard__trips-heading">
            <div>
                <p class="admin-dashboard__eyebrow">TravelTogether administration</p>
                <h1>List Of Trips</h1>
            </div>
            <a href="/trips/create" class="admin-btn admin-btn--primary">
                <i class="bi bi-plus-circle" aria-hidden="true"></i> Add a Trip
            </a>
        </div>
        <section class="admin-card admin-dashboard__trips-card">
            <div class="admin-card__header">
                <div>
                    <p class="admin-dashboard__eyebrow">TravelTogether</p>
                    <h2>List Of Trips</h2>
                </div>
            </div>
            <?php if (empty($voyages)): ?>
                <p class="admin-dashboard__empty-state">Aucun voyage trouvé.</p>
            <?php else: ?>
                <div class="admin-table-wrap">
                    <table class="admin-table" id="dataTable">
                        <thead>
                            <tr>
                                <th class="admin-dashboard__trip-id">#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Budget</th>
                                <th class="admin-dashboard__trip-capacity">Max capacity</th>
                                <th>departure date</th>
                                <th>return date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($voyages as $voyage): ?>
                                <tr>
                                    <td><?= $voyage['id'] ?></td>
                                    <td class="admin-dashboard__trip-title"><?= $voyage['titre'] ?></td>
                                    <td class="admin-dashboard__trip-description" title="<?= esc($voyage['description']) ?>"><?= $voyage['description'] ?></td>
                                    <td class="admin-dashboard__trip-nowrap"><?= $voyage['budget'] ?> dh</td>
                                    <td class="admin-dashboard__trip-capacity"><?= $voyage['nbr_max_personnes'] ?></td>
                                    <td class="admin-dashboard__trip-nowrap"><?= date("Y-m-d", strtotime($voyage['date_depart'])) ?></td>
                                    <td class="admin-dashboard__trip-nowrap"><?= date("Y-m-d", strtotime($voyage['date_retour'])) ?></td>
                                    <td>
                                        <div class="admin-dashboard__trip-actions">
                                            <a href="/trips/edit/<?= $voyage['id'] ?>" class="admin-btn admin-btn--edit">
                                                <i class="bi bi-pencil" aria-hidden="true"></i> <span>Edit</span>
                                            </a>
                                            <a href="/trips/delete/<?= $voyage['id'] ?>" class="admin-btn admin-btn--danger" data-id="<?= $voyage['id'] ?>" onclick="confirmDelete(event, this)">
                                                <i class="bi bi-trash" aria-hidden="true"></i> <span>Delete</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </section>
    </div>
</div>
