
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
   
    <title>TravelTogether</title>
</head>
<body class="text-gray-800 font-inter">

   <!-- Sidebar -->
 
   <section id="sidebar">
		<a href="#" class="brand">
        <i class='bx bxs-plane-alt'></i>
			<span class="text">AdminTravel</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
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
				<a href="#">
                <i class='bx bx-table'></i>
					<span class="text">Booking</span>
				</a>
			</li>
            <li>
    <a href="/activity" id="activities-link">
        <i class='bx bx-task'></i>
        <span class="text">Activities</span>
    </a>
</li>
			<li>
				<a href="/account" id="account">
				<i class='bx bxs-user-account'></i>
					<span class="text">Accounts</span>
				</a>
			</li>
			<li>
				<a href="#">
                <i class='bx bxs-message'></i>
					<span class="text">Reviews</span>
				</a>
			</li>
            
		</ul>
       
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="/login" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>

<!-- Main content -->
<div id="content">
    <nav>
        <i class='bx bx-menu' ></i>
        <a href="#" class="nav-link">Categories</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
            </div>
        </form>
        <a href="#" class="notification">
            <i class='bx bxs-bell' ></i>
            <span class="num">8</span>
        </a>
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
    <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>


</div>
    <div id="dynamic-content" class="container mx-auto p-6">
        <!-- Le contenu des voyages sera chargé ici -->
    </div>
</main>
<script src="<?= base_url('assets/js/script.js') ?>"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- JavaScript de Bootstrap --> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>

</body>
</body>
</html>