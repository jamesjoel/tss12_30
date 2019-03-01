<?php 
$con=mysqli_connect("localhost","root","password","task");
 $query="SELECT * FROM student";
 $result=mysqli_query($con,$query);
 
 $n=1;
 while($data=mysqli_fetch_assoc($result))
 {
 	echo "<tr><td>". $n."</td><td>". $data['name']."</td><td>". $data['age']."</td><td>".$data['class']."</td></tr>";
 $n++;	
 }

 ?>