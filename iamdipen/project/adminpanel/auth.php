<?php
include("connect.php");

$u = $_POST['username'];
$p = $_POST['pass'];

 $query = "SELECT * FROM user WHERE username ='$u'";

 $result = mysqli_query($con, $query);
 print_r($result);

 if(mysqli_num_rows($result)==1) 
 {
    $data= mysqli_fetch_assoc($result)	
 }
 else
 {
    header(location:index.php);
 }

?>