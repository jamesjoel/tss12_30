<?php
include("connect.php");
$a = $_POST['uname']; // james@gmail.com


$que = "SELECT * FROM user WHERE username ='$a'";
$result = mysqli_query($con, $que);

echo mysqli_num_rows($result);

?>