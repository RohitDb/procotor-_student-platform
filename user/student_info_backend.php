<?php 
session_start();
require '../dbconnect.php';
if(isset($_POST['submit']))
{
    $dept=$_POST['department'];
    $sem=$_POST['semester'];
    $mobile_no=$_POST['mobile_no'];
    $parent_name=$_POST['parent_name'];
    $parent_mobile_no=$_POST['parent_mobile_no'];
    $parent_email=$_POST['parent_email'];
    $address=$_POST['address'];
    $usn=$_POST['usn'];
    $sql="insert into students_info values('$usn','$dept',$sem,$mobile_no,'$parent_name',$parent_mobile_no,'$parent_email','$address')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo('<script>
        var x=confirm("Success");
        if(x)
        window.location.replace("index.php");
        </script>');
    }
    else
    {
        echo mysqli_error($conn);
       /* echo('<script>
        var x=confirm("Invalid");
        if(x)
        window.location.replace("student_info_backend.php");
        </script>'); */
    }
}

if(isset($_POST['students_activity']))
{
    $duration=$_POST['duration'];
    $date=$_POST['date'];
    $organization=$_POST['organization'];
    $usn=$_POST['usn'];
    $sql="select proctor from students where usn='$usn'";
    $result=mysqli_query($conn,$sql);
    $proctor="---";
    if($result)
    {
    $row=mysqli_fetch_assoc($result);
    $proctor=$row['proctor'];
    }
    $sql="insert into students_activity values('$usn','$duration','$date','$organization','$proctor')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo('<script>
        var x=confirm("Success");
        if(x)
        window.location.replace("index.php");
        </script>');
    }
    else
    {
        echo mysqli_error($conn);
       /* echo('<script>
        var x=confirm("Invalid");
        if(x)
        window.location.replace("student_info_backend.php");
        </script>'); */
    }
}

if(isset($_POST['students_leave']))
{
    $Begin_date=$_POST['Begin_date'];
    $End_date=$_POST['End_date'];
    $Reason=$_POST['Reason'];
    $usn=$_POST['usn'];
    $days=$_POST['no_of_days'];
    $sql="select proctor from students where usn='$usn'";
    $result=mysqli_query($conn,$sql);
    $proctor="---";
    if($result)
    {
    $row=mysqli_fetch_assoc($result);
    $proctor=$row['proctor'];
    }
    $sql="insert into leave_record values('$usn','$Begin_date','$End_date','$days','$Reason','$proctor')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo('<script>
        var x=confirm("Success");
        if(x)
        window.location.replace("index.php");
        </script>');
    }
    else
    {
        echo mysqli_error($conn);
       /* echo('<script>
        var x=confirm("Invalid");
        if(x)
        window.location.replace("student_info_backend.php");
        </script>'); */
    }
}
if(isset($_POST['students_course']))
{
    $sgpa=$_POST['sgpa'];
    $usn=$_POST['usn'];
    $sem=$_POST['sem'];
    $cgpa=$_SESSION['cgpa'];

    $course_id1=$_POST['course_id1'];
    $course_id2=$_POST['course_id2'];
    $course_id3=$_POST['course_id3'];
    $course_id4=$_POST['course_id4'];
    $course_id5=$_POST['course_id5'];
    $course_id6=$_POST['course_id6'];
    $course_name1=$_POST['course_name1'];
    $course_name2=$_POST['course_name2'];
    $course_name3=$_POST['course_name3'];
    $course_name4=$_POST['course_name4'];
    $course_name5=$_POST['course_name5'];
    $course_name6=$_POST['course_name6'];

    $credits1=$_POST['credits1'];
    $credits2=$_POST['credits2'];
    $credits3=$_POST['credits3'];
    $credits4=$_POST['credits4'];
    $credits5=$_POST['credits5'];
    $credits6=$_POST['credits6'];

    $cie_marks1=$_POST['cie_marks1'];
    $cie_marks2=$_POST['cie_marks2'];
    $cie_marks3=$_POST['cie_marks3'];
    $cie_marks4=$_POST['cie_marks4'];
    $cie_marks5=$_POST['cie_marks5'];
    $cie_marks6=$_POST['cie_marks6'];

    $see_marks1=$_POST['see_marks1'];
    $see_marks2=$_POST['see_marks2'];
    $see_marks3=$_POST['see_marks3'];
    $see_marks4=$_POST['see_marks4'];
    $see_marks5=$_POST['see_marks5'];
    $see_marks6=$_POST['see_marks6'];
$sql="insert into academics values('$usn',$sem,$cgpa,$sgpa)";
$result=mysqli_query($conn,$sql);
if($result)
{
  $sql="insert into course_details values('$usn',$sem,'$course_name1','$course_id1',$credits1,$cie_marks1,$see_marks1),('$usn',$sem,'$course_name2','$course_id2',$credits2,$cie_marks2,$see_marks2)
  ,('$usn',$sem,'$course_name3','$course_id3',$credits3,$cie_marks3,$see_marks3),('$usn',$sem,'$course_name4','$course_id4',$credits4,$cie_marks4,$see_marks4)
  ,('$usn',$sem,'$course_name5','$course_id5',$credits5,$cie_marks5,$see_marks5),('$usn',$sem,'$course_name6','$course_id6',$credits6,$cie_marks6,$see_marks6)" ;
  $result1=mysqli_query($conn,$sql);
  if($result1)
  {
    echo('<script>
    var x=confirm("Success");
    if(x)
    window.location.replace("info.php");
    </script>');  
  }
  else
  {
    echo("one");
    echo mysqli_error($conn);
  }
}
else
{
    echo mysqli_error($conn);
}

}

if(isset($_POST['students_cgpa']))
{
$cgpa=$_POST['cgpa'];
$_SESSION['cgpa']=$cgpa;
echo('<script>
var x=confirm("Success");
if(x)
window.location.replace("info.php");
</script>');  
}


?>
