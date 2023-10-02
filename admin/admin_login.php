<?php
session_start();
?>
<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>

<body>
        <!-- navbar navigation component -->
       <!-- <nav class="navbar navbar-expand-lg navbar-white bg-white">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <div class="nav-dropdown">
                            <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                <ul class="nav-list">
                                    <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="nav-dropdown">
                            <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                <ul class="nav-list">
                                    <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav> -->
        <!-- end of navbar navigation -->
        <!--login-->
        <div class="wrapper">
            <div class="auth-content">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <img class="brand" src="assets/img/login.png" alt="bootstraper logo">
                        </div>
                        <h6 class="mb-4 text-muted">Login to your account</h6>
                        <form action="admin_entry.php" method="post">
                            <div class="mb-3 text-start">
                                <label for="text" class="form-label">Id</label>
                                <input type="text" class="form-control" placeholder="Enter Id" name="id"required>
                            </div>
                            <div class="mb-3 text-start">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>
                            <input type="submit"  class="btn btn-primary shadow-2 mb-4" name="login" value="login">
                        </form>

                        <p class="mb-0 text-muted">Don't have account yet? <a href="admin_signin.php">Signin</a></p>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>