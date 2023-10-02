<?php 
session_start();
$id=$_SESSION['id'];
require '../dbconnect.php';
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
    <title>Dashboard | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    <style>
     #id 
     {
        margin:100px;
     }
    </style>
</head>

<body>
    <div class="wrapper">
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
                                    <i class="fas fa-user"></i> <span>Log out</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="../logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
           
            <?php 
       $sql="select * from students where proctor ='---'";
       $result=mysqli_query($conn,$sql);
       if(!$result)
       {
       echo mysqli_error($conn);
       }
       $count=mysqli_num_rows($result);
       $y=0;
       while($y<$count)
       {
         $row=mysqli_fetch_assoc($result);
         $name=$row['name'];
         echo($name);
         $y++;
       }
            ?>
      <div class="container">
                    <div class="row">
                        <div class="col-md-12 page-header">
                            <div class="page-pretitle">Overview</div>
                            <h2 class="page-title">Dashboard</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                           
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Name</p>
                                                <span class="number"><?php 
                                     $sql="select proctor_name from proctors where proctor_id ='$id'";
                                    $result=mysqli_query($conn,$sql);
                                     $name=mysqli_fetch_assoc($result);
                                                foreach($name as $names){
                                                       print_r($names);
                                                 } ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="olive fas fa-money-bill-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Id</p>
                                                <span class="number"><?php echo $id ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="violet fas fa-eye"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Number of students</p>
                                                <?php 

         $sql="select  count(*) from students where proctor='$id'";
         $result=mysqli_query($conn,$sql);
         if(!$result)
         {
            echo mysqli_error($conn);
         }
        ?>
                                                <span class="number"><?php 
                                        $row = mysqli_fetch_array($result);
                                                 foreach($row as $rows)
                                                 {
                                                 print_r($rows);
                                                 break;
                                                 }
                                                ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="orange fas fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail">
                                                <p class="detail-subtitle">Support Request</p>
                                                <span class="number">75</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-envelope-open-text"></i> For this week
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                -->
            </div>
            <div>
            <div class="margin">
        <div class="card marg1">
                            <div class="card-header">Dashboard</div>
                            <div class="card-body">
                            <div class="col-lg-6">
                            <div class="card-body">
                                <h5 class="card-title"> Student Activity</h5>
                                <br/>
                                    <div class="row g-2">
                                        <div class="col">
                                  <?php 

                                  $sql="select max(cgpa) as max from academics where usn in(select usn from students where proctor='$id')";
                                  $result=mysqli_query($conn,$sql);
                                       if($result)
                                       {
                                        $row=mysqli_fetch_assoc($result);
                                        $cgpa=$row['max'];
                                        echo('<p>Student with highest cgpa '.$cgpa.'</p>');
                                       }
                                       else
                                       {
                                        echo('<p>Student with highest cgpa </p>');

                                       }

                                 ?>
                            </div>
                        </div>
        </div>
    </div>
       </div>
       </div>
            <div id="id">
            <table class="table table-hover ">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Usn</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php 
                                $i=1;
                                 $sql="select * from students where proctor='$id'";
                                 $result=mysqli_query($conn,$sql);
                                 if(!$result)
                                 echo mysqli_error($conn);
                                 else
                                 $count=mysqli_num_rows($result);
                                 while($i<=$count)
                                 {
                                    echo('<form action="view.php" method="post">');
                                    $row=mysqli_fetch_assoc($result);
                                    $name=$row['name'];
                                    $usn=$row['usn'];
                                    $email=$row['email'];
                                    echo('<tr>
                                    <td>'.$i.'</td>
                                     <td>'.$name.'</td>
                                    <td>'.$usn.'</td>
                                    <td>'.$email.'</td>
                                    <input type="hidden" name="usn" value="'.$usn.'" />
                                 <td><input type="submit" name="info" value="Info"/></td>
                                 <td><input type="submit" name="view" value="Academics" /></td>
                                 </form>
                                    </tr>
                                    ');
                                    $i++;
                                 }

                                ?>
  </tbody>
</table> 
            </div>
           
        </div>
    </div>
    
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
