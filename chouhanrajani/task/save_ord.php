<?php
// print_r($_POST);
// die;
// $con=mysqli_connect("localhost","root","","task");
$con=mysqli_connect("localhost","root","password","rajni");
$date=$_POST['date'];
$cus=$_POST['cus_id'];





// echo 
$query="INSERT INTO order_tab(date,cus_id) VALUES('$date','$cus')";
// die;
mysqli_query($con,$query);
header("location:order_tab.php");

?>