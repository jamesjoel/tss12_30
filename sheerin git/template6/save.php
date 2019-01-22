<?php
// print_r($_POST);
$name=$_POST["name"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$mno=$_POST["mno"];
$emailid=$_POST["email"];
$password=$_POST["pwd"];
$p=md5($password);
$city=$_POST["city"];
$pincode=$_POST["pincode"];

$con=mysqli_connect("localhost","root","","database");
$query="insert into user
(name,gender,address,mno,emailid,password,city,pincode)
values('$name','$gender','$address','$mno','$emailid',
'$p','$city','$pincode')";
// echo $query;
$n=mysqli_query($con,$query);
// echo "<br>";
// echo $n;
header("location:login.php");
?>