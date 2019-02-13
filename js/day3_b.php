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
<div style="margin: 20px auto; background-color: #ccc; border: 1px solid #225588; padding: 10px; height: 500px; width: 500px; border-radius: 10px; text-align: center">
		<img src="1.jpg" height="300" width="300" id="img">
		<Hr />
		<img src="1.jpg" onmouseover="demo('1.jpg')" height="100" width="100">
		<img src="2.jpg" onmouseover="demo('2.jpg')" height="100" width="100">
		<img src="3.jpg" onmouseover="demo('3.jpg')" height="100" width="100">
		<img src="4.jpg" onmouseover="demo('4.jpg')" height="100" width="100">
</div>

</body>
</html>