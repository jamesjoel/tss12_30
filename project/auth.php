<?php
include("connect.php");
// print_r($_POST);
$u = $_POST['username'];
$p = $_POST['pass'];
$query = "SELECT * FROM user WHERE username ='$u'";
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result)==1)
{
	echo "yes";
}
else
{
	echo "no";
}
?>