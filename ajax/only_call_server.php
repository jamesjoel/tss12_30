<?php
include("../project/connect.php");
$que = "DELETE FROM student WHERE id = 3";
mysqli_query($con, $que);
?>