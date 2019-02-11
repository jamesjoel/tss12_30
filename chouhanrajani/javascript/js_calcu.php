<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
	<script type="text/javascript">
		function demo1(){
			var a=document.getElementById("first").value;
			var b=document.getElementById("sencond").value;
			var x=parseInt(a);
			var y=parseInt(b);
	
			var ans=x+y;
			alert(ans);
		}
			function demo2(){
			var a=document.getElementById("first").value;
			var b=document.getElementById("sencond").value;
			var x=parseInt(a);
			var y=parseInt(b);
			var ans=x-y;
			alert(ans);
		}
			function demo3(){
			var a=document.getElementById("first").value;
			var b=document.getElementById("sencond").value;
			var x=parseInt(a);
			var y=parseInt(b);
	
			var ans=x*y;
			alert(ans);
		}
			function demo4(){
			var a=document.getElementById("first").value;
			var b=document.getElementById("sencond").value;
			var x=parseInt(a);
			var y=parseInt(b);
			var ans=x/y;
			alert(ans);
			
		}
	</script>
</head>
<body>
<button onclick="demo1()">sum</button>
<button onclick="demo2()">sub</button>
<button onclick="demo3()">multi</button>
<button onclick="demo4()">division</button>
<input type="text" id="first">
<input type="text" id="sencond">
</body>
</html>