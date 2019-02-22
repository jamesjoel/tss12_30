<?php
include("../project/connect.php");
$que = "SELECT * FROM student";
$result = mysqli_query($con, $que);
$n=1;
while($data = mysqli_fetch_assoc($result))
{

	
	echo "<tr><td>".$n."</td><td>".$data['name']."</td><td>".$data['age']."</td></tr>";
	$n++;
}

?>