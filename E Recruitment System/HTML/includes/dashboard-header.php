
<header class="main-header header-2 fixed-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo pad-0" href="index-3.php">
                <img src="img/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown">
                        <a href="dashboard.php" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a href="employer-dashboard-post-job.php" class="nav-link">Post a Job</a>
                    </li>
                  
                    <li class="nav-item dropdown">
                        <a href="employer-dashboard-manage-candidate.php" class="nav-link">Manage Candidate</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="employer-dashboard-manage-job.php" class="nav-link">Manage Jobs</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="employer-dashboard-messages.php" class="nav-link">Messages</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="employer-dashboard-transaction.php" class="nav-link">Transaction</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="employer-dashboard-change-password.php" class="nav-link">Change Password</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="employer-dashboard-edit-profile.php" class="nav-link">Edit Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="index-3.php" class="nav-link">Logout</a>
                    </li>
                </ul>
                <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
                    <ul>
                        <li>
                            <div class="dropdown btns">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://placehold.it/60x60" alt="avatar">
                                    Hi, <?php echo $_SESSION['fullname'] ?>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="employer-dashboard.php">Dashboard</a>
                                    <a class="dropdown-item" href="employer-dashboard-messages.php">Messages</a>
                                    <a class="dropdown-item" href="employer-dashboard-edit-profile.php">Edit profile</a>
                                    <a class="dropdown-item" href="index-3.php">Logout</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="employer-dashboard-post-job.html" class="btn btn-theme btn-md"><i class="flaticon-plus"></i> Post a Job</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
