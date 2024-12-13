<?php if (empty($bookings)): ?>
    <p>No bookings found.</p>
<?php else: ?>  
    <h4 id="a">List of Booking</h4>
    <div class="container my-5">  
        <div class="text-end mb-3"></div>
        <style>
              #a {
                font-family: 'Arial', sans-serif; /* Police claire et moderne */
    font-size: 25px; /* Taille agréable */
    font-weight: 600; /* Légèrement gras pour le rendre plus visible */
    color: #2d3e50; /* Une couleur sombre pour le texte, facile à lire */
    margin-top: 20px; /* Ajouter de l'espace au-dessus */
    margin-bottom: 30px; /* Ajouter de l'espace en dessous */
    letter-spacing: 2px; /* Espacement entre les lettres pour plus de lisibilité */
    position: relative;
    margin-top: -20px; /* Ajoute de l'espace au-dessus du titre */
 ; /* Ajoute de l'espace en dessous du titre */
}
.table-responsive {
    margin-top: -45px !important;
}
table td, table th {
        padding: 5px 20px !important;  /* Augmente la hauteur des cellules */
    }
        </style>
        <div class="table-responsive shadow-lg p-3 mb-9 bg-white rounded">
            <table class="table table-striped table-hover table-light table-sm" id="dataTable">
                <thead class=" text-black">
                    <tr>
                        <th>ID</th>
                        <th>Trip</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Schedule</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookings as $booking): ?>
                        <tr data-booking-id="<?= $booking['id'] ?>">
                            <td><?= $booking['id'] ?></td>
                            <td><?= $booking['voyage'] ?></td> <!-- Affiche le titre du voyage -->
                            <td><?= $booking['username'] ?></td> <!-- Affiche le nom de l'utilisateur -->
                            <td><?= $booking['status'] ?></td>
                            <td><?= $booking['schedule'] ?></td>
                            <td>
                                <form method="post"  action="/booking/updateStatus" class="d-inline">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="id" value="<?= $booking['id'] ?>">
                                    <select name="status"  class="form-select form-select-sm status-select">
                                        <option value="pending" <?= $booking['status'] === 'pending' ? 'selected' : '' ?>>Pending</option>
                                        <option value="confirmed" <?= $booking['status'] === 'confirmed' ? 'selected' : '' ?>>Confirmed</option>
                                        <option value="cancelled" <?= $booking['status'] === 'cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                    </select>
                                </form>
                                <a href="javascript:void(0);" 
                                   class="btn btn-danger btn-sm" 
                                   data-id="<?= $booking['id'] ?>" 
                                   onclick="confirmationDelete(event, this)">
                                   <i class="bi bi-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
$(document).on('change', '.status-select', function() {
    var $select = $(this);
    var bookingId = $select.closest('tr').data('booking-id'); // Récupère l'ID de la réservation
    var status = $select.val(); // Nouveau statut sélectionné

    $.ajax({
        url: '/booking/updateStatus', // URL de la méthode updateStatus
        method: 'POST',
        data: {
            id: bookingId,
            status: status,
            <?= csrf_token() ?>: '<?= csrf_hash() ?>' // CSRF Token pour la sécurité
        },
        success: function(response) {
            if (response.status === 'success') {
                // Mise à jour de la cellule de statut dans le tableau
                $select.closest('tr').find('td').eq(3).text(status); // Mettez à jour la colonne "Status"
                // Optionnellement, vous pouvez aussi modifier la couleur ou ajouter des effets visuels
                var statusText = $select.find("option:selected").text();
                $select.closest('tr').find('td').eq(3).text(statusText);
            } else {
                alert('Failed to update the status.');
            }
        },
        error: function() {
            alert('An error occurred while updating the status.');
        }
    });
});

</script>
<?php endif; ?>
