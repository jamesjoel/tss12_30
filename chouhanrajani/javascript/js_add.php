<!DOCTYPE html>
<html>
<head>
	<title>addition </title>
	<script type="text/javascript">
		function sum()
		{
			var a=document.getElementById("first_value").value;
			var b=document.getElementById("second_value").value;
			var x=parseInt(a);
			var y=parseInt(b);
			var c=x+y;
			alert(c);
		}
	</script>
</head>
<body>
	<input type="text" id="first_value">
	<input type="text" id="second_value">
	<button onclick="sum()">sum</button>
</body>
</html>