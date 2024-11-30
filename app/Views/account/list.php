
 <?php if (empty($account)): ?>
        <p>Not Acount Found.</p>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped table-sm">
                <thead class="thead-dark bg-primary text-white">
                    <tr><th>ID</th>
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
                            <td><?= $user['last_login'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['status'] ?></td>
                            <td><?= date("Y-m-d", strtotime($user['created_at'])) ?></td>
                            <td>
                               
                                <a href="/account/delete/<?= $user['id'] ?>" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>