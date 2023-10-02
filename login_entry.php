<?php
require 'dbconnect.php';
$usn=$_POST["usn"];
$password=$_POST["password"];
if($usn==null || $password==null)
{
  header("location:login.php");

}
else
  if( isset($_POST["signin"])=="signin")
  {
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $sql="select * from students where usn='$usn' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num>0)
    {
      echo('<script>
       var x=confirm("Already one account exists");
       if(x)
       window.location.replace("signin.php");
       </script>');
    }
    else
    {
    $proctor='---';
  $sql="INSERT INTO `students` values('$name','$usn','$password','$email','$proctor')";
  $result=mysqli_query($conn,$sql);
     if($result)
     {
      $_SESSION['username']=$usn;
      echo('<script>
       var x=confirm("once again login");
       if(x)
       window.location.replace("login.php");
       </script>');
     }
     else
     {
      echo('<script>
       var x=confirm("Invalid credentials");
       if(x)
       window.location.replace("signin.php");
       </script>');
     }
  }
}
  } 
  else
  {
    $sql="select * from students where usn='$usn' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
    session_start();
    $_SESSION['username']=$usn;
    header("location:user/index.php");
    }
    else {
      echo('<script>
       var x=confirm("Invalid credentials");
       if(x)
       window.location.replace("login.php");
       </script>');
    } 
    } 
?>
