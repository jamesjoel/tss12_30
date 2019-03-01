<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #995522;
			border-radius: 100px;
		}
	</style>
	<script type="text/javascript">
		function demo()
		{
			var a = Math.random();
			var b = a*600;
			var c = Math.floor(b);


			var x = Math.random();
			var y = x*800;
			var z = Math.floor(y);

			document.getElementById("box").style.marginTop=c+"px";
			document.getElementById("box").style.marginLeft=z+"px";
			// setTimeout("demo()", 1000);
		}
		function test()
		{
			setTimeout("demo()", 500);
		}
	</script>
</head>
<body>
<div id="box" onmouseover="test()"></div>
</body>
</html>