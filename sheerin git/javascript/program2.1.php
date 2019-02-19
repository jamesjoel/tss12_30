<!DOCTYPE html>
<html>
<head>
	<title>day2</title>
	<script>
		function demo()
		{
			document.getElementById('msg').innerHTML="hello world";
		}
		function demo1()
		{
			document.getElementById('body').style.backgroundColor="#581fce";

		}
	</script>
</head>
<body id="body">
	<h2>two events together</h2>
	<button onclick="demo()" ondblclick="demo1()">ok</button>
	<p id="msg"></p>

</body>
</html>