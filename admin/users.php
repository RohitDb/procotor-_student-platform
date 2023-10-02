<?php 
require '../dbconnect.php';
session_start();
$id=$_SESSION['id'];
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
    <title>Users | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/datatables.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar navigation component -->
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="admin.php"><i class="fas fa-table"></i>Home</a>
                </li>
                <li>
                    <a href="users.php"><i class="fas fa-user-friends"></i>Select students</a>
                </li>
            </ul>
        </nav>
        <!-- end of sidebar component -->
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span>Logout</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="../login.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>Select the students</h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>USN</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                $i=0;
                                 $sql="select * from students where proctor='---'";
                                 $result=mysqli_query($conn,$sql);
                                 if(!$result)
                                 echo mysqli_error($conn);
                                 else
                                 $count=mysqli_num_rows($result);
                                 while($i<$count)
                                 {
                                    $row=mysqli_fetch_assoc($result);
                                    $name=$row['name'];
                                    $usn=$row['usn'];
                                    $email=$row['email'];
                                    echo('<tr>
                                    <td>'.$name.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$usn.'</td>
                                    <td class="text-end">
                                    <form action="addstudent.php" method="post">
          <th><input type="submit"  name="add" value="Select"></th>
          <th><input type="hidden" name="usn" value="'.$usn .'" ></th>
          <th><input type="hidden" name="proctor_id" value="'.$id .'" ></th>
          </form>
          </td>
                                    ');
                                    $i++;
                                 }

                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/datatables/datatables.min.js"></script>
    <script src="assets/js/initiate-datatables.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>