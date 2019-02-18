 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>
		function demo()
		{
			// var a = document.getElementById("f_name").value;
			// alert(a);
			document.getElementById("f_name").value="Indore";
			
		}

		function sum()
		{
			var a = document.getElementById("f_num").value;
			var b = document.getElementById("s_num").value;

			var x = parseInt(a);
			var y = parseInt(b);

			var c = x+y;
			// alert(c);
			document.getElementById("msg").innerHTML="Your Ans Is : "+c;
		}
	</script>
</head>
<body>
Name <input type="text" id="f_name" />
<br />
<button onclick="demo()">OK</button>
<hr />
First Number <input type="text" id="f_num" />
<br />
<br />
Second Number <input type="text" id="s_num" />
<br />
<br />
<button onclick="sum()">Sum</button>
<h1 id="msg"></h1>
</body>
</html>