<?php

include("../template6/connection.php");
 // print_r($_POST);
// print_r($_FILES);
 // die;
$a=$_POST["proname"];
$b=$_POST["proprice"];
$c=$_POST["detail"];
$d=$_POST["category"];
$e=$_POST["discount"];
$name=$_FILES['pro_image']['name'];
$tmp=$_FILES['pro_image']['tmp_name'];

$x=explode(".",$name);
$ext=end($x);
$newname=time().rand(1000,10000).".".$ext;
// echo $newname;
$destination="uploads/".$newname;
move_uploaded_file($tmp, $destination);


$query="insert into addproduct
(productname,productprice,detail,category,discount,image)
values('$a',$b,'$c','$d',$e,'$newname')";
// echo $query;
$result=mysqli_query($con,$query);
$_SESSION['msg']="A Product Add Successfully";
header("location:addproduct.php");
?>