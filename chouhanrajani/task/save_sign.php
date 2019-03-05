<?php

$con=mysqli_connect("localhost","root","password","task");
 // print_r($_POST);
$a=$_POST['fullname'];
$b=$_POST['username'];
$c=$_POST['pass'];

$e=$_POST['add'];
$f=$_POST['city'];
$g=$_POST['contact'];
$h=$_POST['pincode'];
$i=$_POST['gender'];
// $x=$_FILES['user_image'];
// print_r($_POST);
// die;
// $name=$_FILES['user_image']['name'];
// $tmp_name=$_FILES['user_image']['tmp_name'];

// $new_name=time().rand(100,1000);
// $arr=explode(".",$name);
// $ext=end($arr);
// $new=$new_name.".".$ext;
// move_uploaded_file($tmp_name,"image/".$new);



// $con=mysqli_connect("localhost","root","","task");
$query="INSERT INTO user (fullname,username,password,address,city,gender,contact,pincode)VALUES('$a','$b','$c','$e','$f','$i','$g','$h')";
mysqli_query($con,$query);
header("location:login.php");
 // echo "save successfull";


 ?>