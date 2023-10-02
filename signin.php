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
    <title>Sign in | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="brand" src="assets/img/bootstraper-logo.png" alt="bootstraper logo">
                    </div>
                    <h6 class="mb-4 text-muted">Create new account</h6>
                    <form action="login_entry.php" method="post">
                        <div class="mb-3 text-start">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="usn" class="form-label">Usn</label>
                            <input type="text" class="form-control" placeholder="Enter Usn" name="usn" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <!-- 
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Confirm password" required>
                        </div> 
                        -->
                        <input type="submit"  class="btn btn-primary shadow-2 mb-4" name="signin" value="signin">

                    </form>
                    <p class="mb-0 text-muted">Already have an account? <a href="login.php">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>