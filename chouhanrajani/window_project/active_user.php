<?php
include("connect.php");
include("header.php");
$link = $_GET['link'];
$query ="UPDATE user SET user_status_link=".$a;
mysqli_query($con,$query);

// print_r($link);

// echo $link;

?>