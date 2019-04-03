<?php
include("connect.php");
$query="SELECT * FROM user WHERE id=".$_SESSION['id'];
$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);
?>