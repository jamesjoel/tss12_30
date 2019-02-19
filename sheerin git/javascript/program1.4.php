<!DOCTYPE html>
<html>
<head>
	<title>day1</title>
	<style>
	#box {
		height:100px;
		width:100px;
		background-color:aqua;
	}
	</style>
	<script type="text/javascript">
		h=100;
		w=100;
		function demo()
		{
			h++;
			w++;
			document.getElementById('box').style.height=h+"px";
			document.getElementById('box').style.width=w+"px";
			 setTimeout("demo()",20);
		}
		
	</script>
</head>
<body>
	<button onclick="demo()">0k</button>
	<div id="box"></div>
</body>
</html>