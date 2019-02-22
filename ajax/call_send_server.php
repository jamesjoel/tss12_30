<?php
include("../project/connect.php");

$a = $_POST['x'];
$b = $_POST['y'];

$que = "INSERT INTO student (name, age) VALUES ('$a', '$b')";

mysqli_query($con, $que);


?>