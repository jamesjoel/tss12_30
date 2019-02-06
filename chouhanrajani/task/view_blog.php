<?php
$con=mysqli_connect("localhost","root","","task");
$query="SELECT * FROM blog";
$result=mysqli_query($con,$query);
 // ($data=mysqli_fetch_assoc($result))
 // $data=mysqli_num_rows($result);
// print_r($data);

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
		<a href="view_blog.php">
			<h3 align="center">view all blogs</h3></a>
			<form>
			<table align="center">
			<tr><td>Subject :<select name="subject"><option>select</option>
							<option  <?php while($data=mysqli_fetch_assoc($result)) echo $data['field'];?>
		 		 <?php echo $data['id'];?>
				 <?php echo$data['subject'];?>
				 <?php echo$data['message'];?>>Science</option>
							<option  <?php while($data=mysqli_fetch_assoc($result)) echo $data['field'];?>
		 		 <?php echo $data['id'];?>
				 <?php echo$data['subject'];?>
				 <?php echo$data['message'];?>>Phusics</option>
							<option  <?php echo $data['field'];?>
		 		 <?php echo $data['id'];?>
				 <?php echo$data['subject'];?>
				 <?php echo$data['message'];?>>Travelling</option>
							<option  <?php echo $data['field'];?>
		 		 <?php echo $data['id'];?>
				 <?php echo$data['subject'];?>
				 <?php echo$data['message'];?>>Cooking</option>
				</select></td></tr> 
				</table>
				</form>
	</div>
</div>
<div id="in-content">
	 <?php 
	
	$n=1;
	while($data=mysqli_fetch_assoc($result))
		{?>
			<div class="menu">
				  <?php echo $data['field'];?>
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


