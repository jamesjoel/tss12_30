<?php
include("connect.php");
// print_r($_POST);
$t=$_POST['title'];
// echo $t;
// print_r($_FILES);
$name=$_FILES['mainimg']['name'];
$tmp=$_FILES['mainimg']['tmp_name'];
// echo $name;
// echo"<br>";
// echo $tmp;
$arr=explode(".",$name);
$ext=end($arr);
$new_name=time().rand(1000,10000).".".$ext;
// echo $new_name;
move_uploaded_file($tmp,"upload/".$new_name);


$name=$_FILES['firstimg']['name'];
$tmp=$_FILES['firstimg']['tmp_name'];
$arr=explode(".",$name);
$ext=end($arr);
$new_name1=time().rand(1000,10000).".".$ext;
move_uploaded_file($tmp,"upload/".$new_name1);

$name=$_FILES['secondimg']['name'];
$tmp=$_FILES['secondimg']['tmp_name'];
$arr=explode(".",$name);
$ext=end($arr);
$new_name2=time().rand(1000,10000).".".$ext;
move_uploaded_file($tmp,"upload/".$new_name2);

$name=$_FILES['thirdimg']['name'];
$tmp=$_FILES['thirdimg']['tmp_name'];
$arr=explode(".",$name);
$ext=end($arr);
$new_name3=time().rand(1000,10000).".".$ext;
move_uploaded_file($tmp,"upload/".$new_name3);


$name=$_FILES['fourthimg']['name'];
$tmp=$_FILES['fourthimg']['tmp_name'];
$arr=explode(".",$name);
$ext=end($arr);
$new_name4=time().rand(1000,10000).".".$ext;
move_uploaded_file($tmp,"upload/".$new_name4);


$query="INSERT into image
 (title,main_img,first_img,second_img,third_img,fourth_img) values('$t','$new_name','$new_name1','$new_name2','$new_name3','$new_name4')";
mysqli_query($con,$query);
header("location:test.php");
?>