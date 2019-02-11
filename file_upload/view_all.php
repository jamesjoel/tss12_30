<?php
include("connect.php");

// $query="select * from add_product"

// $result=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<title>View All User</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
<table width="500" height="40" border="1" align="center" >
	<tr>
		<th>S.No.</th>
		<th>Name</th>
		<th>Age</th>
		<th>Contact</th>
		<th>Iamge</th>
		<!-- <th>S.No.</th> -->
	</tr>
	<?php
	// while ($data=mysqli_fetch_assoc(result))
	{?>
		<tr>
			<td><?php echo $data['id'];?></td>
			<td><?php echo $data['age'];?></td>
			<td><?php echo $data['contact'];?></td>
		    <td><?php echo $data['user_name'];?></td>
			<img src="upload/<?php echo $data['product_img']?>">
		</tr>
	>?}
	?>
</table>
</body>
</html>