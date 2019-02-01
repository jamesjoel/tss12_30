<?php
$con=mysqli_connect("localhost","root","password","task");
$a=$_POST['title'];
$b=$_POST['subject'];
$c=$_POST['msg'];



$query="INSERT INTO blog(title,subject,message) VALUES('$a','$b','$c')";
mysqli_query($con,$query);
header("location:blog.php");

?>