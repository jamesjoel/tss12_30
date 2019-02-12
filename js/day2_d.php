<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function demo1()
		{
			var a = document.getElementById("txt").value;
			var x = a.length;
			document.getElementById("msg").innerHTML=x;
		}
	</script>
</head>
<body id="body">
Message
<br />
<textarea id="txt" onkeyup="demo1()" cols="30" rows="5"></textarea>
<p>Charator Size : <b id="msg">0</b></p>
</body>
</html>