<?php 
$con=mysqli_connect("localhost","root","password","task");
$a=$_POST['x'];
$b=$_POST['y'];
$c=$_POST['z'];
$query="INSERT INTO student (name,age,class) VALUES('$a','$b','$c')";
mysqli_query($con,$query);
 ?>