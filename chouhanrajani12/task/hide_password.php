<!DOCTYPE html>
<html>
<head>
	<title>hide password task</title>
	<script type="text/javascript">
		function hide() {
			 
			 document.getElementById("pass").setAttribute("type","password");
			}
			function show()
			{
				document.getElementById("pass").setAttribute("type","text");
			}

	</script>
</head>
<body>
	
<input type="password" id="pass"><button onclick="hide()">hide</button><button onclick="show()">show</button>

</body>
</html>