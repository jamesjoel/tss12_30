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
		function demo1()
		{	var a=Math.random();
			var b=a*500;
			var c=Math.floor(b);
			// alert(c);

			var x=Math.floor(Math.random()*500);
			// alert(x);
			document.getElementById('box').style.marginTop=c+"px";
			document.getElementById('box').style.marginLeft=x+"px";
			setTimeout("demo1()",500);
		}
	</script>
</head>
<body>
	<div id="box" onmouseover="demo1()" ></div>

</body>
</html>