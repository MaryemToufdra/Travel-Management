<div class="container my-4">
    <?php if (empty($contacts)): ?>
        <p>No contacts found.</p>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-sm" id="dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th >Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contacts as $contact): ?>
                        <tr>
                            <td><?= $contact['id'] ?></td>
                            <td><?= $contact['username'] ?></td>
                            <td><?= $contact['email'] ?></td>
                            <td><?= $contact['subject'] ?></td>
                            <td><?= $contact['message'] ?></td>
                            <td>
                               
                                <a href="/contact/delete/<?= $contact['id'] ?>" class="btn btn-danger btn-sm" data-id="<?= $contact['id'] ?>" onclick="confirmDelete1(event, this)">
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

