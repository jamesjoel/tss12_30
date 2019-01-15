<?php
$arr1 = array();
$arr1[]="rohit";
$arr1[]=25;
$arr1[]="indore";
$arr1[]="male";
$arr1[]=25.001;

$arr2= array("name"=>"rohit","city"=>"indore","data"=>$arr1);

$arr3=array("red", "green", $arr2, "blue");
// print_r($arr3);
// echo "<Hr />";


$data=array("indore", "mumbai", "pune", "bhopal", "ujjain", "dewas", "delhi", "bangolore");
// print_r($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ol>
<?php
foreach($data as $x)
{
	echo "<li>".$x."</li>";
}
?>
</ol>
<br />
<hr />
City <select>
		<option>Select</option>
		<?php
		foreach($data as $x)
		{
			echo "<option>".$x."</option>";
		}
		?>
</select>

<br />
<br />
<br />
<hr />
Year <select>
		<option>Select</option>
		<?php
		$current_year=2020;


		for($i=1905; $i<=$current_year; $i++)
		{
			echo "<option>".$i."</option>";
		}
		?>
</select>
<hr />
<hr />
<?php

$data = array("name"=>"rohit", "age"=>25, "city"=>"indore", "gender"=>"male");

?>
<table border="1" align="center" width="200">
	<?php
	foreach($data as $i => $x)
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$x."</td>";
		echo "</tr>";
	}
	?>
</table>
</body>
</html>

