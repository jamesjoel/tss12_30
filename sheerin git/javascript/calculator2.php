<!DOCTYPE html>
<html>
<head>
	<title>day3</title>
	<script>
		function cal(n)
		{
			var a=parseInt(document.getElementById('txt1').value);
			var b=parseInt(document.getElementById('txt2').value);
			switch(n)
			{
				case 1:var e=a+b;
				break;
				case 2:var e=a-b;
				break;
				case 3:var e=a*b;
				break;
				case 4:var e=a/b;
				break;
			}
			document.getElementById('msg').innerHTML=e;

		}
	</script>
</head>
<body>
	first number<input type="text" id="txt1">
	<br>
	<br>
	second number<input type="text" id="txt2">
	<br/><br/>
	<button onclick="cal(1)">+</button>
	<button onclick="cal(2)">-</button>
	<button onclick="cal(3)">*</button>
	<button onclick="cal(4)">/</button>
	<h3 id="msg"></h3>

</body>
</html>