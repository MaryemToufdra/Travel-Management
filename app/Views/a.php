<!-- app/Views/dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

    <div class="container my-3">
        <div class="row g-4">
            <!-- Total Bookings -->
            <div class="col-md-2">
                <div class="card stat-card bg-primary text-white text-center p-3 shadow-sm rounded mb-4">
                    <div class="icon mb-3">
                        <i class="bi bi-calendar-check" style="font-size: 2rem;"></i>
                    </div>
                    <div class="count" style="font-size: 1.5rem; font-weight: bold;">
                        <?= $totalBookings ?>
                    </div>
                    <div class="title" style="font-size: 1rem;">Total Bookings</div>
                </div>
            </div>

            <!-- Total Users -->
            <div class="col-md-2">
                <div class="card stat-card bg-success text-white text-center p-4 shadow-sm rounded mb-4">
                    <div class="icon mb-3">
                        <i class="bi bi-people" style="font-size: 2rem;"></i>
                    </div>
                    <div class="count" style="font-size: 1.5rem; font-weight: bold;">
                        <?= $totalUsers ?>
                    </div>
                    <div class="title" style="font-size: 1rem;">Total Users</div>
                </div>
            </div>

            <!-- Total Activities -->
            <div class="col-md-2">
                <div class="card stat-card bg-warning text-white text-center p-4 shadow-sm rounded mb-4">
                    <div class="icon mb-3">
                        <i class="bi bi-activity" style="font-size: 2rem;"></i>
                    </div>
                    <div class="count" style="font-size: 1.5rem; font-weight: bold;">
                        <?= $totalActivities ?>
                    </div>
                    <div class="title" style="font-size: 1rem;">Total Messages</div>
                </div>
            </div>

            <!-- Total Trips -->
            <div class="col-md-2">
                <div class="card stat-card bg-danger text-white text-center p-4 shadow-sm rounded mb-4">
                    <div class="icon mb-3">
                        <i class="bi bi-map" style="font-size: 2rem;"></i>
                    </div>
                    <div class="count" style="font-size: 1.5rem; font-weight: bold;">
                        <?= $totalTrips ?>
                    </div>
                    <div class="title" style="font-size: 1rem;">Total Trips</div>
                </div>
            </div>
        </div>
    </div>
   
    <?= view('Book/list'); ?>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
