<?php
print_r($_POST)
$u = $_POST['admin_name'];
$p = $_POST['pass'];
echo "$u";
echo "$p"
die;
include("../connect.php");
 $query = "SELECT * FROM admin WHERE admin_name ='$u'";
 echo $query;
 die;

 $result = mysqli_query($con, $query);
 print_r($result);

 if(mysqli_num_rows($result)==1) 
 {
    $data= mysqli_fetch_assoc($result)
    header(location:header.php;)	
 }
 else
 {
    header(location:login.php);
 }

?>