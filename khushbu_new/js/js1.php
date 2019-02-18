<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo1()
		{
		document.getElementById("pass").setAttribute("type","text");

	    }
	    function demo2()
		{
		document.getElementById("pass").setAttribute("type","password");

	    }
	</script>
</head>
<body>
password<input type="password" id="pass"/>
<button onclick="demo1()">show</button>
<button onclick="demo2()">hide</button>
</body>
</html>