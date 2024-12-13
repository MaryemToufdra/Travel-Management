
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
    <title>TravelTogether</title>
</head>
<body class="text-gray-800 font-inter">
   <section id="sidebar">
		<a href="#" class="brand">
        <i class='bx bxs-plane-alt'></i>
			<span class="text">AdminTravel</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="/dashboard" id="dashboard">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="/voyages" id="trips-link">
                <i class='bx bxs-plane-alt'></i>
					<span class="text">Trips</span>
				</a>
			</li>

            <li>
    <a href="contact/affiche" id="activities-link">
    <i class='bx bxs-message'></i>       
     <span class="text">Messages</span>
    </a>
</li>
	<li>
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
<div id="content">
    <nav>
        <i class='bx bx-menu' ></i>
        <a href="#" class="nav-link">Categories</a>
        <form id="searchForm">
    <div class="form-input">
        <input type="search" id="searchInput" placeholder="Search..." required>
        <button type="submit" class="search-btn">
            <i class='bx bx-search'></i>
        </button>
    </div>
</form>
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
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
            </div>
        </div>
    </main>
</div>
<div id="dynamic-content" class="container mx-auto p-6">
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
</div>

</main>

<script src="<?= base_url('assets/js/script.js') ?>"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    

</body>
</body>
</html>