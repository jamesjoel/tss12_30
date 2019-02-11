<!DOCTYPE html>
<html>
<head>
	<title>input tag</title>
	<script type="text/javascript">
		function demo() {
			var a =document.getElementById("f_name").value;
			alert(a);
		}
	</script>
</head>
<body>
	name<input type="text" id="f_name"/>
	<button onclick="demo()">ok</button>
</body>
</html>