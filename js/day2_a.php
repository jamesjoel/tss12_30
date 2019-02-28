<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo1()
		{
			document.getElementById("msg").innerHTML="hello world";
		}
		function demo2()
		{
			document.getElementById("body").style.backgroundColor="red";
		}
	</script>
</head>
<body id="body">
<h4>Onclick</h4>
<button onclick="demo1()" ondblclick="demo2()">Onclick Event</button>
<p id="msg"></p>

</body>
</html>