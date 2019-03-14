<?php
include("connect.php");
$a=$_POST['fullname'];
$b=$_POST['add'];
$c=$_POST['city'];
$d=$_POST['gender'];
$e=$_POST['hobby'];
$f=$_POST['contact'];
$g=$_POST['pincode'];
$h=$_FILES['file'];
$name=$_FILES['file']['name'];
if($_FILES['file']['name']=""){
	$name=$_FILES['file']['name'];
	$tmp_name=$_FILES['file']['tmp_name'];
	$arr=explode(".", $name);
	$new=time().rand(100,1000);
	$ext=end($arr);
	$new_name=$new.".".$ext;
	move_uploaded_file($tmp_name, "upload/".$new_name);
	$query="UPDATE user SET fullname='$a',address='$b',city='$c',hobby='$e',gender='$d',contact='$f',pincode='$g',image='$new_name' WHERE id=".$_SESSION['id'];
}
else{
	$query="UPDATE user SET fullname='$a',address='$b',city='$c',hobby='$e',gender='$d',contact='$f',pincode='$g' WHERE id=".$_SESSION['id'];
}
mysqli_query($con,$query);
header("location:myprofile.php");
?>