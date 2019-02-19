<!DOCTYPE html>
<html>
<head>
	<title>day3</title>
	<script>
	
		function cal1()
		{
			var a=document.getElementById('txt1').value;
			var b=document.getElementById('txt2').value;
			var c=parseFloat(a);
			var d=parseFloat(b);
			var e=c+d;
			document.getElementById('msg').innerHTML=e;
		}
		function cal2()
		{
			var a=document.getElementById('txt1').value;
			var b=document.getElementById('txt2').value;
			var c=parseFloat(a);
			var d=parseFloat(b);
			var e=c-d;
			document.getElementById('msg').innerHTML=e;
		}
		function cal3()
		{
			var a=document.getElementById('txt1').value;
			var b=document.getElementById('txt2').value;
			var c=parseFloat(a);
			var d=parseFloat(b);
			var e=c*d;
			document.getElementById('msg').innerHTML=e;
		}
		function cal4()
		{
			var a=document.getElementById('txt1').value;
			var b=document.getElementById('txt2').value;
			var c=parseFloat(a);
			var d=parseFloat(b);
			var e=c/d;
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
	<button onclick="cal1()">+</button>
	<button onclick="cal2()">-</button>
	<button onclick="cal3()">*</button>
	<button onclick="cal4()">/</button>
	<h3 id="msg"></h3>

</body>
</html>