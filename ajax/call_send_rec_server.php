<?php
include("../project/connect.php");

$a = $_POST['name'];
$b = $_POST['age'];

$que = "INSERT INTO student (name, age) VALUES ('$a', '$b')";
mysqli_query($con, $que);


$que = "SELECT * FROM student";
$result = mysqli_query($con, $que);
$n=1;
while($data=mysqli_fetch_assoc($result))
{
	echo "<tr><td>".$n."</td><td>".$data['name']."</td><td>".$data['age']."</td></tr>";
	$n++;
}

?>