<?php 
session_start();
require '../dbconnect.php';
?>
<?php
if(isset($_POST['view']))
{
$usn=$_POST['usn'];
echo('<html lang="en">

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
        .marg1 
        {
            margin:10px;
        }
     .marg2
     {
        margin:20px;
     }
    </style>
</head>

<body>');
echo(' <div class="content">
<div class="container">
    <div class="page-title">
    </br/>
        <h3>Activity</h3>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
            ');
            $sql4="select * from students_activity where usn='$usn'";
            $result4=mysqli_query($conn,$sql4);
            if($result4)
            {
            $count=mysqli_num_rows($result4);
             $row4=mysqli_fetch_assoc($result4);
            echo('
                <div class="card-header">Student information</div>
                <div class="card-body">
                    <p class="card-title">Total number of activities :'.$count.' </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Duration (in weeks)</th>
                                    <th>Date</th>
                                    <th>Organization</th>
                                </tr>
                            </thead>
                            <tbody>
                            ');
                            for($i=1;$i<=$count;$i++)
                            {
                                if($row4)
                                {
                              $duration=$row4['duration'];
                               $date=$row4['date'];
                                $organization=$row4['organization_name'];
                               echo(' <tr>
                               <th scope="row">'.$i.'</th>
                               <td>'.$duration.'</td>
                               <td>'.$date.'</td>
                               <td>'.$organization.'</td>
                           </tr>');
                                }
                                $row4=mysqli_fetch_assoc($result4);
                            }
                        }
                            echo('
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-12">
        <br/>
        <br/>
        <h3>Leave information</h3>
            <div class="card"> ');
            
            $sql5="select * from leave_record where usn='$usn'";
            $result5=mysqli_query($conn,$sql5);
            if($result5)
            {
            $count=mysqli_num_rows($result5);
             $row5=mysqli_fetch_assoc($result5);
            echo('
                <div class="card-header">Student information</div>
                <div class="card-body">
                    <p class="card-title">Total number of leaves :'.$count.' </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Days</th>
                                    <th>Reason</th>
                                </tr>
                            </thead>
                            <tbody>
                            ');
                            for($i=1;$i<=$count;$i++)
                            {
                                if($row5)
                                {
                              $start_date=$row5['start_date'];
                               $end_date=$row5['end_date'];
                               $days=$row5['days'];
                                $reason=$row5['reason'];
                               echo(' <tr>
                               <th scope="row">'.$i.'</th>
                               <td>'.$start_date.'</td>
                               <td>'.$end_date.'</td>
                               <td>'.$days.'</td>
                               <td>'.$reason.'</td>
                           </tr>');
                                }
                                $row5=mysqli_fetch_assoc($result5);
                            }
                        }
                            echo('
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>');

echo('

<br/>
<div class="col-md-12 col-lg-12">
<h2>Academics</h2>
<div class="card marg2" >
<div class="card-header">Student Information</div>
<div class="card-body">
<div class="col-lg-6">
<div class="card-body">
        <div class="row g-2">    
           ');
        $sql3="select * from academics where usn='$usn'";
        $result3=mysqli_query($conn,$sql3);
        if($result3)
        {
        $row=mysqli_fetch_assoc($result3);
     if($row)
     {
            $cgpa=$row['cgpa'];
            echo('<h3>Cgpa</h3><br/>');
            echo('<h2>'.$cgpa.'</h2>');
        }
    }
    
        else
        {
            echo('<h3>Cgpa</h3><br/>');
            echo('<h2> -</h2>');
        }

            echo('</h2>  
            <hr/>   
        </div>

</div>
</div>  '); 

$sql="select * from students_info where usn='$usn'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
    $row=mysqli_fetch_assoc($result);
    if($row)
    { 
    $sql2="select a.*,c.* from course_details c inner join academics a on a.usn=c.usn and a.sem=c.sem and a.usn='$usn'";
    $sem=$row['Semester'];
  echo('<h5 class="card-title"></h5>');
  echo('<div class="set_margin">');
    for( $i=1;$i<=$sem;$i++)
    {
$result2=mysqli_query($conn,$sql2);
if($result)
{
if($result2)
{
$rows2=mysqli_fetch_assoc($result2);
if($rows2)
$sgpa=$rows2['sgpa'];
else
{
$sgpa=" ";
}
}
echo('  <div class="row g-2">     
<h4>Sem '.$i.'</h4><br/><br/>  

               <h5>&nbsp;&nbsp;Sgpa '.$sgpa.'</h5>     
           </div>
           <table class="table">
           <thead>
               <tr>
                   <th>Course Name</th>
                   <th>CIE MARKS</th>
                   <th>SEE MARKS</th>
               </tr>
           </thead>
           <tbody>
');
for($j=0;$j<6;$j++)
{
$rows=mysqli_fetch_assoc($result);
if($rows)
{
$course_name=$rows['course_name'];
$cie_marks=$rows['cie_marks'];
$see_marks=$rows['see_marks'];
}
else
{
   
    $course_name=" ";
    $cie_marks=" ";
    $see_marks=" ";     
}
echo('
<tr>
<th scope="row">'.$course_name.'</th>
<td>'.$cie_marks.'</td>
<td>'.$see_marks.'</td>
</tr>');
}
echo('      </tbody>
</table><hr/>');
    }
}
    }
    else
    {
        echo "Not entered";
    }
    }
    else
    {
        echo "Empty";
    }
echo('</div>
</div>
</div>
</div>
</div> 
</body>
</html> ');
}
?>

<?php 
if(isset($_POST['info']))
{
    $usn=$_POST['usn'];
    
    echo('<html lang="en">

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
        .margin
        {
         margin:0px 200px 0px 200px;
        }
          
         .marg2
         {
            margin:20px;
         }
        </style>
    </head>
    
    <body>');
    $sql="select * from students_info where usn='$usn'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
    $rows=mysqli_fetch_assoc($result);
      if($rows)
      {
    echo('    
     <div class="margin">
    <div class="card marg1">
                        <div class="card-header">Student Information</div>
                        <div class="card-body">
                        <div class="col-lg-6">
                        <div class="card-body">
                            <h3 class="card-title"> Student Info</h3>
                            <br/>
                                <div class="row g-2">
                                    <div class="col">
                           <p>Department &nbsp;&nbsp;  <span STYLE="font-weight:bold;font-size:20px">'.$rows['department'] .'</span></p>
                           <p>Semester &nbsp;&nbsp;<span STYLE="font-weight:bold;font-size:20px"> '.$rows['Semester'] .'</span></p>
                           <p>Contact no &nbsp;&nbsp;<span STYLE="font-weight:bold;font-size:20px"> '.$rows['contact_no'] .'</span> </p>
                           <br/>
                           <h3>Parents info</h3>
                           <br/>
                           <p>Parents name &nbsp;&nbsp;<span STYLE="font-weight:bold;font-size:20px"> '.$rows['parents_name'] .'</span></p>
                           <p>Parents contact &nbsp;&nbsp;<span STYLE="font-weight:bold;font-size:20px"> '.$rows['parents_contact_no'] .'</span></p>
                           <p>Parents email &nbsp;&nbsp;<span STYLE="font-weight:bold;font-size:20px"> '.$rows['parents_email'] .'</span></p>
                           <p>Address  &nbsp;&nbsp;<span STYLE="font-weight:bold;font-size:20px"> '.$rows['Address'] .'</span></p>
                        </div>
                    </div>
    </div>
</div>
</body>
</html>
');
      }
      else
      {
        echo('    
        <br/>
         <div class="margin">
        <div class="card marg1">
                            <div class="card-header">Student Information</div>
                            <div class="card-body">
                            <div class="col-lg-6">
                            <div class="card-body">
                                <h5 class="card-title"> Student Info</h5>
                                <br/>
                                    <div class="row g-2">
                                        <div class="col">
                               <p>Department </p>
                               <p>Semester</p>
                               <p>Contact no </p>
                               <p>Parents name</p>
                               <p>Parents contact</p>
                               <p>Parents email</p>
                               <p>Address</p>
                            </div>
                        </div>
        </div>
    </div>
    </body>
    </html>
    ');
      }
}
}
?>