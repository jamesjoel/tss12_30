<?php 
$con=mysqli_connect("localhost","root","password","task");
$query="DELETE FROM student WHERE id=1";
mysqli_query($con,$query);



?>