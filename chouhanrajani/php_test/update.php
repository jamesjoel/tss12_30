<?php
session_start();
$con=mysqli_connect("localhost","root","password","task");
// $con=mysqli_connect("localhost","root","","task");
 // print_r($_POST);
// die;

$a=$_POST['fullname'];
$b=$_POST['add'];
$c=$_POST['city'];
$e=$_POST['contact'];
$f=$_POST['pincode'];
$name=$_FILES['file']['name'];
$g=$_POST['gender'];
$u=$_POST['pid'];
  // print_r($_POST);
 // print_r($_FILES);
 // die;
if($_FILES['file']['name']!="")
{
	// echo "wjkdfjakldfjakljdflak";
$name = $_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
   // echo $name; 
   // echo $tmp_name;
    // die;
$new=time().rand(100,1000);
$arr=explode(".", $name);
$ext=end($arr);
$x=($new.".".$ext);

// // $si=$_FILES["file"]["size"];

// // $err=$_FILES["file"]["error"];
// echo $ext;
// echo $x;
// die;
move_uploaded_file($tmp_name, "upload/".$x);
// echo $mm;
// die;


$query="UPDATE user SET fullname='$a',address='$b',city='$c',contact='$e',pincode='$f',gender='$g', image='$x' WHERE id='$u'";
// echo $query;
 // die;
}
else{
$query="UPDATE user SET fullname='$a',address='$b',city='$c',contact='$e',pincode='$f',gender='$g' WHERE id='$u'";
}
mysqli_query($con,$query);
// echo $query;
// die;

 header("location:myprofile.php");

?>