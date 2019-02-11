<!DOCTYPE html>
<html>
<head>
	<title>color font size </title>
	<script type="text/javascript">
		function demo(){
			var a=document.getElementById("bgcolor").value;
			document.getElementById("para").style.backgroundColor=a;
			var b=document.getElementById("size").value;
			document.getElementById("para").style.fontSize=b+"px";
			var c=document.getElementById("color").value;
			document.getElementById("para").style.color=c;
		}
	</script>
</head>
<body>
<input type="text" id="bgcolor">backgroundcolor
<input type="text" id="size">font size
<input type="text" id="color">font color
<p id="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<button onclick="demo()">apply</button>
</body>
</html>