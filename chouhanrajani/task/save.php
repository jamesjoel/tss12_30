<?php
// print_r($_POST);
// die;
$con=mysqli_connect("localhost","root","","task");
$a=$_POST['title'];
$b=$_POST['subject'];
$c=$_POST['msg'];



$query="INSERT INTO blog(field,subject,message) VALUES('$a','$b','$c')";
mysqli_query($con,$query);
header("location:blog.php");

?>