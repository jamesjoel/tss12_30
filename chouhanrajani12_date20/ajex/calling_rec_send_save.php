<?php
$a=$_POST['x'];
$b=$_POST['y'];
$c=$_POST['z'];
$con=mysqli_connect("localhost","root","password","task");
$query="INSERT INTO student (name,age,class)VALUES('$a','$b','$c')";
mysqli_query($con,$query);




$que="SELECT * FROM student";
$res=mysqli_query($con,$que);
// echo "Hello";

$n=1;
while($data=mysqli_fetch_assoc($res))
{
	echo "<tr><td>". $n."</td><td>". $data['name']."</td><td>". $data['age']."</td><td>".$data['class']."</td></tr>";
 $n++;	
}



 ?>