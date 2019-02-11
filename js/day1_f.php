<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#box{
			
			background-color: #665544;
			
		}
	</style>
	<script type="text/javascript">
		function demo()
		{
			var color = "";
			for(var i=1; i<=6; i++)
			{

				var a = Math.random();
				var b = a*15;
				var c = Math.floor(b);
				switch(c){
					case 10 : var x = "A";
								break;
					case 11 : var x = "B";
								break;
					case 12 : var x = "C";
								break;
					case 13 : var x = "D";
								break;
					case 14 : var x = "E";
								break;
					case 15 : var x = "F";
								break;
					default : var x = c;				
				}			
				color += x;
			}
			document.getElementById("box").style.backgroundColor="#"+color;
			setTimeout("demo()", 500);

		}
	</script>
</head>
<body id="box">
<button onclick="demo()">OK</button>
</body>
</html>