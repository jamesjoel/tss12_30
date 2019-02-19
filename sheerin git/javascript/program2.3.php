<!DOCTYPE html>
<html>
<head>
	<title>day2</title>
		<style>
	#box
	{
		height:200px;
		width:200px;
		background-color:#ce5678;
		border-radius: 100px;
	}
	</style>
	<script>
		var h=10;
		var w=10;
		
		function demo1()
		{	h=h+50;
			w=w+50;
			document.getElementById('box').style.marginTop=h+"px";
			document.getElementById('box').style.marginLeft=w+"px";
		}
	</script>
</head>
<body>
	<div id="box" onmouseover="demo1()"></div>

</body>
</html>