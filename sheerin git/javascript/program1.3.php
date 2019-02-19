<!DOCTYPE html>
<html>
<head>
	<title>day1</title>
	<script>
		function demo1()
		{
			alert("hello");
			document.getElementById('body').style.backgroundColor="red";
		}
		function demo2()
		{
		setTimeout("demo1()",3000);//call function after some time
		}

	</script>
</head>
<body id="body">
<button onclick="demo2()">ok</button>
</body>
</html>