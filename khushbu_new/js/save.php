<?php
include("connect.php");

$a = $_POST['title'];

$name=$_FILES['mainfile']['name'];
$b=$_FILES['mainfile']['tmp_name'];
$x=explode(".",$name);
$y=end($x);
$z=time().rand(10000, 100000).".".$y;
move_uploaded_file("$b","img/".$z);


$name1=$_FILES['first']['name'];
$b=$_FILES['first']['tmp_name'];
$x=explode(".",$name);
$y=end($x);
$z1=time().rand(10000, 100000).".".$y;
move_uploaded_file("$b","img/".$z);


$name=$_FILES['second']['name'];
$b=$_FILES['second']['tmp_name'];
$x=explode(".",$name);
$y=end($x);
$z2=time().rand(10000, 100000).".".$y;
move_uploaded_file("$b","img/".$z);



$name=$_FILES['third']['name'];
$b=$_FILES['third']['tmp_name'];
$x=explode(".",$name);
$y=end($x);
$z3=time().rand(10000, 100000).".".$y;
move_uploaded_file("$b","img/".$z);


$name=$_FILES['fourth']['name'];
$b=$_FILES['fourth']['tmp_name'];
$x=explode(".",$name);
$y=end($x);
$z4=time().rand(10000, 100000).".".$y;
move_uploaded_file("$b","img/".$z);

$query = "INSERT INTO task(title,main_img,first_img,second_img,third_img,fourth_img)VALUES('$a','$z','$z1','$z2','$z3','$z4')";
$result=mysqli_query($con,$query);
header("location:file.php");

?>