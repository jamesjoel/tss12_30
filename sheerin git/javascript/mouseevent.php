<!DOCTYPE html>
<html>
<head>
	<title>image</title>
	<style>
		#box{
			height:500px;
			width:500px;
			background-color:#abc123;
			border-radius: 50px;
			text-align: center;
			margin:20px auto;
			border:1px solid #123def;
			padding:20px;	
			}
		#img{
			height:400px;
			width:400px;
			}
	</style>
	<script>
		function show(n)
		{
		// document.getElementById('img').src=n;
		document.getElementById('img').setAttribute("src",n);

		}
		function zoom()
		{
		 document.getElementById('img').style.height="600px";
		 document.getElementById('img').style.width="600px";

		}
		function zoomout()
		{
		 document.getElementById('img').style.height="400px";
		 document.getElementById('img').style.width="400px";

		}
	</script>
</head>
<body>
		<div id="box"><img src="1.jpg" id="img" onmousemove="zoom()" onmouseout="zoomout()">
		</hr>
		<img src="1.jpg" onmouseover="show('1.jpg')" height="100" width="100" >
		<img src="2.jpg" onmouseover="show('2.jpg')"height="100" width="100" >
		<img src="3.jpg" onmouseover="show('3.jpg')"height="100" width="100" >
		<img src="4.jpg" onmouseover="show('4.jpg')"height="100" width="100" >
		</div>

</body>
</html>