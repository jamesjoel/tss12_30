<?php
include("connect.php");
$query="select * from image ";
$result=mysqli_query($con,$query);
// $data=mysqli_fetch_assoc($result);
// print_r($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table align="center"  border=1 cellspacing="0px" cellpadding="10px">
		<tr>
			<td>sno</td>
			<td>title</td>
			<td>main image</td>
			<td>view</td>
		</tr>
	 <?php
		while($data=mysqli_fetch_assoc($result))
			{
				 // print_r($data);
			?>
			<tr>
			<td><?php echo $data['id'];?></td>
			<td><?php echo $data['title'];?></td>
			<td><img src="upload/<?php echo $data['main_img'];?>" height="100" width="100"></td>
			<td><a href="viewmore.php?pid=<?php echo $data['id'];?>">viewmore</a></td>
		</tr>
		<?php
			}
		?> 
	</table>

</body>
</html>