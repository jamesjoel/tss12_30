<!DOCTYPE html>
<html>
<head>
	<title>day2</title>
	<style>
	#box
	{
		height:300px;
		width:300px;
		background-color:#ce5678;
	}
	</style>
	<script type="text/javascript">
		var h=300;
		var w=300;
		function demo1()
		{
			document.getElementById('box').style.backgroundColor="#def432";
		}
		function demo2()
		{
			h++;
			w++;
			document.getElementById('box').style.height=h+"px";
			document.getElementById('box').style.width=w+"px";
		}
		function demo3()
		{
			
			document.getElementById('box').style.height="300px";
			document.getElementById('box').style.width="300px";
			document.getElementById('box').style.backgroundColor="#ce5678";
			 h=300;
			 w=300;
		}
		
	</script>
</head>
<body>
	<div id="box" onmouseover="demo1()" onmousemove="demo2()" onmouseout="demo3()"></div>

</body>
</html>