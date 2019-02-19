<?php
$con=mysqli_connect("localhost","root","","database");
// print_r($_POST);
$name=$_POST['name'];
$age=$_POST['age'];
// print_r($name);
$n=0;
 foreach($name as $a)
 {
 	$b=$age[$n];
 	$query="insert into student (name,age) values('$a','$b')";
 	mysqli_query($con,$query);
 	$n++;
 }
 echo"data saved";

?>