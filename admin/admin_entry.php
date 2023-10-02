<?php
require '../dbconnect.php';
$id=$_POST["id"];
$password=$_POST["password"];
if($id==null || $password==null)
{
  header("location:admin_login.php");

}
else
  if( isset($_POST["signin"])=="signin")
  {
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $sql="select * from proctors where proctor_id='$id' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num>0)
    {
      echo('<script>
       var x=confirm("Already one account exists");
       if(x)
       window.location.replace("admin_signin.php");
       </script>');
    }
    else
    {
    
  $sql="INSERT INTO `proctors` values('$id','$name','$password','$email')";
  $result=mysqli_query($conn,$sql);
     if($result)
     {
        session_start();
      $_SESSION['id']=$name;
      header("location:admin.php");
     }
     else
     {
      echo('<script>
       var x=confirm("Invalid credentials");
       if(x)
       window.location.replace("admin_signin.php");
       </script>');
     }
  }
}
  } 
  else
  {
    $sql="select * from proctors where proctor_id='$id' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
    session_start();
    $_SESSION['id']=$id;
    header("location:admin.php");
    }
    else {
      echo('<script>
       var x=confirm("Invalid credentials");
       if(x)
       window.location.replace("admin_login.php");
       </script>');
    } 
    } 
?>
