<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			height: 100px;
			width: 100px;
			background-color: #245781;
		}
	</style>
	<script type="text/javascript">
		var h = 100;
		var w = 100;
		var clear="";
		function start()
		{
			h++;
			w++;
			document.getElementById("box").style.height=h+"px";
			document.getElementById("box").style.width=w+"px";
			clear=setTimeout("start()", 10);

		}
		function pause()
		{
			clearTimeout(clear);
		}
		function reset()
		{
			h=100;
			w=100;
			document.getElementById("box").style.height="100px";
			document.getElementById("box").style.width="100px";
		}

	</script>
</head>
<body>
<button onclick="start()">Start</button>
<button onclick="pause()">Pause</button>
<button onclick="reset()">Reset</button>
<hr />
<div id="box"></div>
</body>
</html>