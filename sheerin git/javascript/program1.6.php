<!DOCTYPE html>
<html>
<head>
	<title>day1</title>
	<style>
		#body{
			background-color:#789eee;
		}
	</style>
	<script>
		function demo()
		{
			var color="";
		for(var i=1;i<=6;i++)
		{
		var a=Math.random();
		var b=a*15;
		var c=Math.floor(b);
		 // alert(c);
		switch(c){
			case 10 : var x="A";
					break;
			case 11 : var x="B";
					break;
			case 12 : var x="C";
					break;
			case 13 : var x="D";
					break;
			case 14 : var x="E";
					break;
			case 15 : var x="F";
					break;
			default: var x=c;
			}
			color +=x;
		}
			// alert(color);
			document.getElementById('body').style.backgroundColor="#"+color;
			setTimeout("demo()",500);
		}
	</script>
</head>
<body id="body">
	<button onclick="demo()">ok</button>
</body>
</html>