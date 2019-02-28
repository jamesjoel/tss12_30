<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			var a = document.createElement("p");
			a.innerHTML="hello";
			document.getElementById("body").appendChild(a);
		}
	</script>
</head>
<body id="body">
<button onclick="demo()">OK</button>
</body>
</html>