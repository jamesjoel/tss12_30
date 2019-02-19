<!DOCTYPE html>
<html>
<head>
	<title>day2</title>
</head>
<script type="text/javascript">
	function demo1()
	{
		var a=document.getElementById('txt').value;
		var x=a.length;
		document.getElementById('msg').innerHTML=x;

	}
	
	// function demo3()
	// {
	// 	var a="maryam";
	// 	alert(a);	
	// }
</script>

<body>
	keys_event
	<hr>
<textarea id="txt" rows="10" cols="30" onkeyup="demo1()"
onkeypress="demo3()"></textarea>

<p>character size:<b id="msg"></b></p>


</body>
</html>