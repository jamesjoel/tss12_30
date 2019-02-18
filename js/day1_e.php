<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #225588;
		}
	</style>
	<script type="text/javascript">
		var h = 100;
		var w = 100;



		function demo()
		{
			h++;
			w++;
			document.getElementById("box").style.height=h+"px";
			document.getElementById("box").style.width=w+"px";
			setTimeout("demo()", 10);
		}



	</script>
	
</head>
<body>
<button onclick="demo()">OK</button>
<div id="box"></div>
</body>
</html>