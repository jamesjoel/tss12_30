<?php
include("connect.php");
// include("header.php");

// $query="select * from add_product"

// $result=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>View All </title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
<table width="500" height="40" border="1" align="center" >
	<tr>
		<th>S.No.</th>
		<th>Name</th>
		<th>Age</th>
		<th>Contact</th>
		<th>Image</th>
		<!-- <th>S.No.</th> -->
	</tr>
	<?php


$query = "SELECT * FROM product";
$result = mysqli_query($con, $query);
while ($data=mysqli_fetch_assoc($result))
{
// print_r($data);
	
?>	<tr>
			<td><?php echo $data['id'];?></td>
			<td><?php echo $data['age'];?></td>
			<td><?php echo $data['name'];?></td>
			
			<td><?php echo $data['contact'];?></td>
		    
			<td><img src="image/<?php echo $data['image']?>" height="100px", width="100px"></td>
		</tr>
	<?php
}
	?>
</table>
</body>
</html>