<!DOCTYPE html>
<html>
<head>
	<title>day1</title>
	<script>
		function demo()
		{
		// var a=document.getElementById("name").value;
		// alert(a);
		document.getElementById("name").value="ujjain";

		}
		// demo();
		function sum()
		{
		var a=document.getElementById("f_no").value;
	    var b=document.getElementById("s_no").value;
	    // var c=a+b;      //it concatinate + its written type string
	    var c=parseInt(a)+parseFloat(b);
	    // alert(c);
	    document.getElementById("msg").innerHTML="sum is : "+c;
		}
	</script>
</head>
<body>
	name:<input type="text" id="name">
<br/>
	<button onclick="demo()">ok</button>
	<!-- <input type="button" onclick="demo()"   value="ok" > -->
<hr>
first number:<input type="text" id="f_no">
second number:<input type="text" id="s_no">
<br/><br/>
	<button onclick="sum()">sum</button>
<h1 id="msg">sum is:</h1>

</body>
</html>