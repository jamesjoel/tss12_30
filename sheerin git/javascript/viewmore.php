<?php
include("connect.php");
// print_r($_GET);
$a=$_GET['pid'];
$query="select * from image where id=$a";
$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);
// print_r($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>viewmore</title>
	<style>
	#box
	{
		height:600px;
		width:700px;
		background-color: #acd789;
		border-radius: 20px;
		margin:10px auto;
		box-shadow: 10px 10px 10px #000;
		text-align: center;
		padding-top: 15px;
	}
	#img
		{
			
			margin:5px;
		}
	</style>
	<script>
			function show(n)
			{ 
				document.getElementById('img').setAttribute("src",n);
			}
			function zoom()
			{
				 document.getElementById('img').style.height="600px";
				 document.getElementById('img').style.width="600px";

			}
			function zoomout()
			{
				 document.getElementById('img').style.height="300px";
		 		document.getElementById('img').style.width="300px";
		 		
			}
	</script>
	
	
</head>
<body>
<div id="box">
	<img src="upload/<?php echo $data['main_img'];?>" height="300" width="300" id="img" onmousemove="zoom()" onmouseout="zoomout()">
	<hr/>
	<img src="upload/<?php echo $data['first_img'];?>" height="150" width="150" onmouseover="show('upload/<?php echo $data['first_img'];?>')">
	<img src="upload/<?php echo $data['second_img'];?>" height="150" width="150"  onmouseover="show('upload/<?php echo $data['second_img'];?>')">
	<img src="upload/<?php echo $data['third_img'];?>" height="150" width="150" id="img" onmouseover="show('upload/<?php echo $data['third_img'];?>')">
	<img src="upload/<?php echo $data['fourth_img'];?>" height="150" width="150" id="img" onmouseover="show('upload/<?php echo $data['fourth_img'];?>')">

	
</div>

</body>
</html>