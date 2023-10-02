<?php
session_start();
require '../dbconnect.php';
if(isset($_POST['add']))
{
  $usn=$_POST['usn'];
  $proctor_id=$_POST['proctor_id'];
$sql="update students set proctor='$proctor_id' where usn='$usn' ";
$result=mysqli_query($conn,$sql);
  if($result)
  {
   echo('<script>alert("Added");</script>');
    header("location:users.php");
  }
  else
   {
    echo mysqli_error($conn);
    echo('<script>alert("Not added");</script>');
    //header("location:users.php");

  }
}
?>
