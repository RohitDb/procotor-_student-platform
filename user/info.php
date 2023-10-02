<?php 
session_start();  
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
    <title>Tables | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/datatables.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <style>
        .margin
        {
            margin:50px;
        }
        .set_margin
        {
         margin-top:10px;
margin-left:50px;
         display:flex;
         flex-wrap:wrap;
       //  justify-content:space-between;
        }
        .colourless 
        {
            color:white;
        }
        .verify_margin 
        {
        margin:20px;
        }
    </style>
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
            <a href="index.php"><i class="fas fa-table"></i> Home</a>
                </li>
                <li>
                <a href="info.php"><i class="fas fa-table"></i> Info</a>
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
                                    <i class="fas fa-user"></i> <span>Log out</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <div class="dropdown-divider"></div>
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
            $usn=$_SESSION['username'];
            $sql="select * from students_info where usn='$usn'";
            $result=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
             if($num==0)
             {
            echo('<div class="margin">
            <div class="card">
                                <div class="card-header">Student Information</div>
                                <div class="card-body">
                                <div class="col-lg-6">
                                <div class="card-body">
                                    <h5 class="card-title"> Student Credentials</h5>
                                        <div class="row g-2">
                                            <div class="col">
                                     <form action="student_info_backend.php" method="post">

                                                <input name="department" type="text" placeholder="Department" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <input type="number" name="semester" placeholder="Semester" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <input type="number" name="mobile_no" placeholder="Contact no" class="form-control" required>
                                            </div>
                                           
                                        </div>

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"> Parents Credentials </h5>

                                        <div class="row g-2">
                                            <div class="col">
                                                <input name="parent_name" type="text" placeholder="Name" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <input type="number" name="parent_mobile_no" placeholder="Contact no" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <input type="email" name="parent_email" placeholder="Email" class="form-control" required>
                                            </div>
                                           
                                        </div>

                                </div>
                        </div>   
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="1234 Main St, Unit, Building, or Floor" required>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your address.</div>
                                        </div>
                                        <input type="hidden" name="usn" value="'.$usn.'">
                                        <button type="submit" class="btn btn-primary" name="submit"><i class="fas fa-save"></i> Submit</button>
                                    </form>
                                </div>
                            </div>
            </div>
        </div>
</div>
        </div>
    </div>');
             }
            ?>
            <div class="margin">
            <div class="card">
                                <div class="card-header">Student Information</div>
                                <div class="card-body">
                                <div class="col-lg-6">
                                <div class="card-body">
                                    <h5 class="card-title">Academics</h5>
                                        <div class="row g-2">
                                            <div class="col">
                                     <form action="student_info_backend.php" method="post">

                                                <input name="cgpa" type="number" placeholder="Enter cgpa" class="form-control" required>
                                <input type="hidden" name="usn" value="<?php echo $usn ?>">
                                                <br/>
                                <button type="submit" class="btn btn-primary" name="students_cgpa"><i class="fas fa-save"></i>Verify</button>
            </form>
                                            </div>
                                          
                                        </div>
            </div>
            </div>
            </div>
            </div>
            </div>             
                                        <?php 
                                    $usn=$_SESSION['username'];
                                    $sql="select * from students_info where usn='$usn'";
                                    $result=mysqli_query($conn,$sql);
                                    $row=mysqli_fetch_assoc($result);
                                    $sem=$row['Semester'];
                                    $sql2="select max(sem) as max from course_details where usn='$usn'";
                                    $result2=mysqli_query($conn,$sql2);
                                    $row2=mysqli_fetch_assoc($result2);
                                    $start=1;
                                    if($row2)
                                    {
                                        $start=$row2['max']+1;
                                    }
                                  echo('<h5 class="card-title"></h5>');
                                  echo('<div class="set_margin">');
                                    for( $i=$start;$i<=$sem;$i++)
                                    {
                                        
                                    echo('
                                    <br/>
                                    
                                    <form action="student_info_backend.php" method="post">
                                    <div class="card">
                                    <div class="card-body">
                                    <h5 class="card-title">Semester '.$i.'</h5>
                                    <br/><div class="row g-2">
                                    <div class="col">
                                        <input name="sgpa" type="number" placeholder="Enter sgpa" class="form-control" required>
                                        <br/>
                                        <input name="course_id1" type="text" placeholder="Enter course id" class="form-control" required>
                                        <input name="course_id2" type="text" placeholder="Enter course id" class="form-control" required>
                                        <input name="course_id3" type="text" placeholder="Enter course id" class="form-control" required>
                                        <input name="course_id4" type="text" placeholder="Enter course id" class="form-control" required>
                                        <input name="course_id5" type="text" placeholder="Enter course id" class="form-control" required>
                                        <input name="course_id6" type="text" placeholder="Enter course id" class="form-control" required>
                                    
                        
                                    </div>
                                    <div class="col">
                                    <p class="colourless">hell</p>
                                    <br/>
                                    <input name="course_name1" type="text" placeholder="Enter course name" class="form-control" required>
                                    <input name="course_name2" type="text" placeholder="Enter course name" class="form-control" required>
                                    <input name="course_name3" type="text" placeholder="Enter course name" class="form-control" required>
                                    <input name="course_name4" type="text" placeholder="Enter course name" class="form-control" required>
                                    <input name="course_name5" type="text" placeholder="Enter course name" class="form-control" required>
                                    <input name="course_name6" type="text" placeholder="Enter course name" class="form-control" required>
                                </div>
                                <div class="col"> 
                                <p class="colourless">hell</p>
                                <br/>
                                <input name="credits1" type="text" placeholder="Credits" class="form-control" required>
                                <input name="credits2" type="text" placeholder="Credits" class="form-control" required>
                                <input name="credits3" type="text" placeholder="Credits" class="form-control" required>
                                <input name="credits4" type="text" placeholder="Credits" class="form-control" required>
                                <input name="credits5" type="text" placeholder="Credits" class="form-control" required>
                                <input name="credits6" type="text" placeholder="Credits" class="form-control" required>
                            </div>
                            <div class="col"> 
                                <p class="colourless">hell</p>
                                <br/>
                                <input name="cie_marks1" type="text" placeholder="cie marks" class="form-control" required>
                                <input name="cie_marks2" type="text" placeholder="cie marks" class="form-control" required>
                                <input name="cie_marks3" type="text" placeholder="cie marks" class="form-control" required>
                                <input name="cie_marks4" type="text" placeholder="cie marks" class="form-control" required>
                                <input name="cie_marks5" type="text" placeholder="cie marks" class="form-control" required>
                                <input name="cie_marks6" type="text" placeholder="cie marks" class="form-control" required>
                            </div>
                            <div class="col"> 
                                <p class="colourless">hell</p>
                                <br/>
                                <input name="see_marks1" type="text" placeholder="see marks" class="form-control" required>
                                <input name="see_marks2" type="text" placeholder="see marks" class="form-control" required>
                                <input name="see_marks3" type="text" placeholder="see marks" class="form-control" required>
                                <input name="see_marks4" type="text" placeholder="see marks" class="form-control" required>
                                <input name="see_marks5" type="text" placeholder="see marks" class="form-control" required>
                                <input name="see_marks6" type="text" placeholder="see marks" class="form-control" required>
                                  </div>
                                </div>
                                </div>
                                <div class="verify_margin">
                                <input type="hidden" name="usn" value="'.$usn.'">
                                <input type="hidden"  name="sem" value="'.$i.'">
                                <button type="submit" class="btn btn-primary" name="students_course"><i class="fas fa-save"></i>Verify</button>
                                </div>
                                </div>
                                </form>
                                
                                ');
                                        }
                                    echo("</div><br/>");
                                        ?>
                                </div>
                        </div>   
                                </div>
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