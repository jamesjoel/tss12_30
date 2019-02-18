<?php
$con=mysqli_connect("localhost","root","password","task");
$a=$_GET['pid'];
// echo $a;
$query="SELECT * FROM image where id=".$a;
$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);
// print_r($data);
// die;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		function demo(y)
		{
			
			document.getElementById("up").setAttribute("src", y);
		}
	</script>
</head>
<body>
<div id="in-content" align="center">
	<img src="upload/<?php echo $data['main_img'];?>" height="100" width="100" id="up">
	<hr>
	<?php
	$x=$data['first_img']; 
	// echo $x;
	$z=$data['sec_img'];
	// echo $z;
	?> 
	

	<img onmouseover="demo('upload/<?php echo $x ?>')" height="80" width="80" src="upload/<?php echo $data['first_img'];?>">
	<img onmouseover="demo('upload/<?php echo $z ?>')" height="80" width="80" src="upload/<?php echo $data['sec_img'];?>">
	<img onmouseover="demo('upload/<?php echo $data['thir_img'];?>')" height="80" width="80" src="upload/<?php echo $data['thir_img'];?>">
	<img onmouseover="demo('upload/<?php echo $data['fort_img'];?>')" height="80" width="80" src="upload/<?php echo $data['fort_img'];?>">
</div>
</body>
</html>