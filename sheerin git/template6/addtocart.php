<?php
// print_r($_GET);
$a = $_GET['pid'];
// echo $a;
if (isset($_COOKIE['pro_id']))
{

	$old=$_COOKIE['pro_id'];
	$new=$old."#".$a;
    setcookie("pro_id",$new,time()+3600);
}
else
{
setcookie("pro_id",$a,time()+3600);
}
header("location:index.php");
?>