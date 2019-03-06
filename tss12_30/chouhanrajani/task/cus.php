<?php
$con=mysqli_connect("localhost","admin","password","rajni");

$query="INSERT INTO cus_table(name) VALUES('rajni')";
mysqli_query($con,$query);
echo "data inserted successfull";
?>