<!DOCTYPE html>
<html>
<head>
	<title>password </title>
	<script type="text/javascript">
		function show()
		{
		// document.getElementById('pass').setAttribute("type","text");
		document.getElementById('pass').type="text";
		}
		function hide()
		{
		// document.getElementById('pass').setAttribute("type","password");
		document.getElementById('pass').type="password";
		}
	</script>
</head>
<body>
	<br/>
	<input type="password" id="pass">
	<button onclick="show()">show</button>
	<button onclick="hide()">hide</button>

</body>
</html>