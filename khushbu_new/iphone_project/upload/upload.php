<?php
include("connect.php");
$name=$_FILES['image']['name'];

$tmp_name=$_FILES['image']['name'];
$new_name=time().rand(1000,1000);
$arr=expload(".",$name);
$ext=end($arr);
$x=$new_name.".".$ext;
move_uploaded_file(tmp_name, "image/".$x);

$query="INSERT INTO image_form('image')values('$x')";
mysqli_connect($con,$query);

?>