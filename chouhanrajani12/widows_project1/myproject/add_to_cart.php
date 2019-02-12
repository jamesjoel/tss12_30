<?php
// print_r($_GET);
$a = $_GET['pid'];

if(isset($_COOKIE['product_id']))
{
	$old = $_COOKIE['product_id'];
	$x = $old."#".$a;
	setcookie("product_id", $x, time()+3600);

}
else
{
	setcookie("product_id", $a, time()+3600);
}


header("location:index.php");
?>