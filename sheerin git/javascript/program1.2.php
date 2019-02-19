<!DOCTYPE html>
<html>
<head>
	<title>day1</title>
	<script>
		function demo()
		{
		 	var a=document.getElementById('color').value;
		 	document.getElementById('para').style.backgroundColor=a;
			document.getElementById('para').style.color="#12eabf";
			document.getElementById('para').style.fontSize="30px";
		}//property that has - second word first letter capital

	</script>
</head>
<body>
	<button onclick="demo()">format</button>
	<input type="text" id="color">
<p id="para"> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat.</p>

</body>
</html>