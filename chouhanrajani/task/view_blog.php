<?php
$con=mysqli_connect("localhost","root","password","task");
$query="SELECT * FROM blog";
$result=mysqli_query($con,$query);


?>
<!DOCTYPE html>
<html>
<head>
	<title>my page</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="header">
	<div id="in-header">
		<a href="view_blog.php"><h3 align="center">view all blogs</h3></a>
	</div>
</div>
<div id="in-content">
	<?php 
	
	$n=1;
	while($data=mysqli_fetch_assoc($result))
		{?>
			<div class="menu">
				 
		 		 <?php echo $data['id'];?>
				 <?php echo$data['subject'];?>
				 <?php echo$data['message'];?>
			</div>
		
	<?php
		$n++;
	}
		?>

</div>
</body>
</html>


