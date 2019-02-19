<!DOCTYPE html>
<html>
<head>
	<title>create element</title>
	<script type="text/javascript">
	function demo()
	{
		var a=document.createElement("div");
		a.innerHTML="hello";
		document.getElementById('body').appendChild(a);
		// document.getElementById("body").style.backgroundColor="red";
		 a.style.color="blue";
		 a.style.fontWeight="bold";
		 a.style.fontSize="30px";

	}
	</script>

<!-- 	<style>
	div
	{
		color:red;
		background-color: yellow;
	}
	</style> -->
</head>
<body id="body">
	<button onclick="demo()">ok</button>

</body>
</html>