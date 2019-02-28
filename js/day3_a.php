<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo(n)
		{
			var a = parseInt(document.getElementById("f_num").value);
			var b = parseInt(document.getElementById("s_num").value);
			switch(n){
				case 1 : var c = a+b;
						break;
				case 2 : var c = a-b;
						break;
				case 3 : var c = a*b;
						break;
				case 4 : var c = a/b;
						break;
			}
			
			document.getElementById("ans").innerHTML="Your Ans is "+c;
		}
	</script>
</head>
<body>
First Number <input type="Text" id="f_num"/>
<Br />
<Br />
Second Number <input type="Text" id="s_num"/>
<br />
<button onclick="demo(1)">+</button>
<button onclick="demo(2)">-</button>
<button onclick="demo(3)">x</button>
<button onclick="demo(4)">/</button>
<h2 id="ans"></h2>

</body>
</html>