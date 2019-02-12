<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo()
		{
			alert("hello");
		}
		function demo2()
		{

			setTimeout("demo()", 1000);
		}
	</script>
</head>
<body>
<button onclick="demo2()">OK</button>
</body>
</html>