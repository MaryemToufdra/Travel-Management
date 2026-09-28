
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
    <title>TravelTogether</title>
</head>
<body class="admin-dashboard">
   <section id="sidebar" class="admin-dashboard__sidebar">
		<a href="#" class="brand">
        <i class='bx bxs-plane-alt'></i>
			<span class="text">AdminTravel</span>
		</a>
		<ul class="side-menu top">
			<li class="<?= in_array(service('uri')->getSegment(1) ?? '', ['', 'accueil'], true) ? 'active' : '' ?>">
				<a href="<?= site_url('accueil') ?>" id="dashboard">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="<?= in_array(service('uri')->getSegment(1), ['voyages', 'trips'], true) ? 'active' : '' ?>">
				<a href="/voyages" id="trips-link">
                <i class='bx bxs-plane-alt'></i>
					<span class="text">Trips</span>
				</a>
			</li>

            <li class="<?= service('uri')->getSegment(1) === 'contact' ? 'active' : '' ?>">
    <a href="contact/affiche" id="activities-link">
    <i class='bx bxs-message'></i>       
     <span class="text">Messages</span>
    </a>
</li>
	<li class="<?= service('uri')->getSegment(1) === 'account' ? 'active' : '' ?>">
				<a href="/account" id="account">
				<i class='bx bxs-user-account'></i>
					<span class="text">Accounts</span>
				</a>
			</li>
		
            
		</ul>
       
		<ul class="side-menu">
		
			<li>
				<a href="/login" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
<div id="content" class="admin-dashboard__content">
    <nav class="admin-dashboard__topbar">
        <i class='bx bx-menu' ></i>
        <a href="#" class="nav-link">Dashboard</a>
        <form id="searchForm">
    <div class="form-input">
        <input type="search" id="searchInput" placeholder="Search..." required>
        <button type="submit" class="search-btn">
            <i class='bx bx-search'></i>
        </button>
    </div>
</form>
        <span class="admin-dashboard__admin-name"><?= session()->get('username') ?></span>
        <a href="/login" class="admin-dashboard__topbar-logout">Logout</a>
        <div class="profile-container">
                <a href="#" class="profile" onclick="toggleDropdown()">
                <img src="<?= base_url('public/uploads/' . session()->get('profile_image')) ?>" class="profile-img">
               
                </a>
                <div class="profile-dropdown">
                    <!-- Formulaire avec les classes Bootstrap -->
                    <form action="/profile/update" id="profile-form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="<?= session()->get('username') ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="new password">
                        </div>
                        <div class="form-group">
                            <label for="profile_image">Change Profile Image</label>
                            <input type="file" name="profile_image" id="profile_image" class="form-control-file">
                        </div>
                                                <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </form>
                </div>
            </div>
</nav>
    <main>
            <div class="head-title admin-dashboard__page-heading">
            <div class="left">
                    <p class="admin-dashboard__eyebrow">TravelTogether administration</p>
                    <h1>Welcome back, <?= session()->get('username') ?></h1>
                </div>
            </div>
            <div id="dynamic-content" class="admin-dashboard__main">
            <div class="admin-dashboard__stats">
                <!-- Total Bookings -->
                <div class="admin-dashboard__stat-card">
                    <div class="admin-dashboard__stat-icon">
                        <i class="bx bxs-calendar-check" aria-hidden="true"></i>
                    </div>
                    <div>
                        <div class="admin-dashboard__stat-count">
                            <?= $totalBookings ?>
                        </div>
                        <div class="admin-dashboard__stat-label">Total Bookings</div>
                    </div>
                </div>

                <!-- Total Users -->
                <div class="admin-dashboard__stat-card">
                    <div class="admin-dashboard__stat-icon">
                        <i class="bx bxs-group" aria-hidden="true"></i>
                    </div>
                    <div>
                        <div class="admin-dashboard__stat-count">
                            <?= $totalUsers ?>
                        </div>
                        <div class="admin-dashboard__stat-label">Total Users</div>
                    </div>
                </div>

                <!-- Total Activities -->
                <div class="admin-dashboard__stat-card">
                    <div class="admin-dashboard__stat-icon">
                        <i class="bx bxs-message" aria-hidden="true"></i>
                    </div>
                    <div>
                        <div class="admin-dashboard__stat-count">
                            <?= $totalActivities ?>
                        </div>
                        <div class="admin-dashboard__stat-label">Total Messages</div>
                    </div>
                </div>

                <!-- Total Trips -->
                <div class="admin-dashboard__stat-card">
                    <div class="admin-dashboard__stat-icon">
                        <i class="bx bxs-map" aria-hidden="true"></i>
                    </div>
                    <div>
                        <div class="admin-dashboard__stat-count">
                            <?= $totalTrips ?>
                        </div>
                        <div class="admin-dashboard__stat-label">Total Trips</div>
                    </div>
                </div>
            </div>
            <section class="admin-dashboard__bookings" aria-labelledby="bookings-title">
                <div class="admin-dashboard__section-heading">
                    <div>
                        <p class="admin-dashboard__eyebrow">Activity overview</p>
                        <h2 id="bookings-title">Recent bookings</h2>
                    </div>
                </div>
                <div class="admin-dashboard__booking-card">
                    <?php if (empty($bookings)): ?>
                        <p class="admin-dashboard__empty-state">No bookings found.</p>
                    <?php else: ?>
                        <div class="admin-dashboard__table-title">List of Booking</div>
                        <div class="admin-dashboard__table-scroll">
                            <table class="admin-dashboard__booking-table" id="dataTable">
                                <thead>
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
                                            <td><?= $booking['voyage'] ?></td>
                                            <td><?= $booking['username'] ?></td>
                                            <td>
                                                <span class="admin-dashboard__status admin-dashboard__status--<?= esc(strtolower($booking['status'])) ?>">
                                                    <?= $booking['status'] ?>
                                                </span>
                                            </td>
                                            <td class="admin-dashboard__schedule"><?= $booking['schedule'] ?></td>
                                            <td>
                                                <form method="post" action="/booking/updateStatus" class="d-inline">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="id" value="<?= $booking['id'] ?>">
                                                    <select name="status" class="form-select form-select-sm status-select">
                                                        <option value="pending" <?= $booking['status'] === 'pending' ? 'selected' : '' ?>>Pending</option>
                                                        <option value="confirmed" <?= $booking['status'] === 'confirmed' ? 'selected' : '' ?>>Confirmed</option>
                                                        <option value="cancelled" <?= $booking['status'] === 'cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                                    </select>
                                                </form>
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm" data-id="<?= $booking['id'] ?>" onclick="confirmationDelete(event, this)">
                                                    <i class="bi bi-trash"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <script>
                        $(document).on('change', '.status-select', function() {
                            var $select = $(this);
                            var bookingId = $select.closest('tr').data('booking-id');
                            var status = $select.val();

                            $.ajax({
                                url: '/booking/updateStatus',
                                method: 'POST',
                                data: {
                                    id: bookingId,
                                    status: status,
                                    <?= csrf_token() ?>: '<?= csrf_hash() ?>'
                                },
                                success: function(response) {
                                    if (response.status === 'success') {
                                        $select.closest('tr').find('td').eq(3).find('.admin-dashboard__status').text(status);
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
                </div>
            </section>
            </div>
        </main>
    </div>

    <script src="<?= base_url('assets/js/script.js') ?>"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    

</body>
</body>
</html>