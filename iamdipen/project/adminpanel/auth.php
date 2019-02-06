<?php
// print_r($_POST);
include("../connect.php");
$u = $_POST['admin_name'];
$p = $_POST['pass'];
// echo $u;
// echo $p;

$query = "SELECT * FROM admin WHERE admin_name ='$u'";

$result = mysqli_query($con,$query);

if (mysqli_num_rows($result)==1)
{
 $data_admin= mysqli_fetch_assoc($result);

    if($data_admin["pass"]==md5($p))
    {
      //    echo "hello";
      $_SESSION["name"]=$data['admin_name'];
      header("location:header.php");
    }

    else
    {
      
      $_SESSION['msg']="Invalid Password"
         // header("location:login.php");
    }

}
else
 { 
  $_SESSION['msg']="Invalid Username AND Password"

    header("location:login.php");
 }  

?>