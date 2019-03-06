<?php
print_r($_POST);

$con = mysqli_connect("localhost", "admin", "admin", "tss12_30");

$name = $_POST['name'];
$age = $_POST['age'];
$n=0;
foreach($name as $a)
{
	$b = $age[$n];

	$que = "INSERT INTO student (name, age) VALUES ('".$a."', '".$b."')";
	mysqli_query($con, $que);


	$n++;
}

// $arr = $_POST;
// $n = count($arr);
// $n=$n/2;


// for($i=1; $i<=$n; $i++)
// {
// 	$a = $arr["name".$i];
// 	$b = $arr["age".$i];

// 	$que = "INSERT INTO student (name, age) VALUES ('".$a."', '".$b."')";
// 	mysqli_query($con, $que);
// }





echo "Data Saved";
?>