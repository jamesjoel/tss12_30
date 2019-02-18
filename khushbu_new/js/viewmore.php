<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo(a)
		{
			document.getElementById("img").setAttribute("src", a);
		}
	</script>
</head>
<body>
	<?php
	while($data=mysqli_fetch_assoc($result))
	{
	?>
<div style="margin: 20px auto; background-color: #ccc; border: 1px solid blue; padding: 10px; height: 500px; width: 500px; border-radius: 10px; text-align: center">
		<img height="300" width="300" id="img" src="img/<?php echo $data["main_image"];?>"onmouseover="demo('img/<?php echo $data ['main']?>)"/>"
		<Hr />
		<!-- <img src="1.jpg" onmouseover="demo('1.jpg')" height="100" width="100">
		<img src="2.jpg" onmouseover="demo('2.jpg')" height="100" width="100">
		<img src="3.jpg" onmouseover="demo('3.jpg')" height="100" width="100">
		<img src="4.jpg" onmouseover="demo('4.jpg')" height="100" width="100">
	 -->
</div>
<?php
}
?>

</body>
</html>