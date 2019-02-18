<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function sum()
		{
			var a=document.getElementById("fname").value;
			var b=document.getElementById("sname").value;
			var x = parseInt(a);
			var y = parseInt(b);

			var c = x+y;
			document.getElementById("msg").innerHTML= "answer"+c;
		}
	</script>
</head>
<body>
first number<input type="text" id="fname"/>
second number<input type="text" id="sname"/>
<button onclick="sum()">sum</button>
<p id="msg"></p>
</body>
</html>