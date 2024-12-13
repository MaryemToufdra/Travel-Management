<?php if (empty($account)): ?>
    <p>No Account Found.</p>
<?php else: ?>
    <div class="container my-4">
        <div class="text-end mb-3"></div>
        <div class="table-responsive shadow-lg p-3 mb-5 bg-white rounded">
            <table class="table table-striped table-hover table-light table-sm" id="dataTable">
                <thead class="text-black">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Last_Login</th>
                        <th>Status</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($account as $user): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['last_login'] ?></td>
                            <td><?= $user['status'] ?></td>
                            <td><?= date("Y-m-d", strtotime($user['created_at'])) ?></td>
                            <td>
                            <a href="/account/delete/<?= $user['id'] ?>" 
   class="btn btn-danger btn-sm" 
   data-id="<?= $user['id'] ?>" 
   onclick="confirmdelet(event, this)">
   <i class="bi bi-trash"></i> Delete
</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
