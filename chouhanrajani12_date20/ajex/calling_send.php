<!DOCTYPE html>
<html>
<head>
	<title>send information</title>
	<script type="text/javascript" src="jquery.js">
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("button").click(function(){
					var a=$("#name").val();
					var b=$("#age").val();
					var c=$("#class").val();
					$.ajax({
						url:"calling_send_save.php",
						type:"post",
						data:{x:a,y:b,z:c}
					});
				});
			});
		</script>
</head>
<body>
 <table id="tab" border="1" align="center">
	<tr><td>
		name<input type="text" id="name">
	</td></tr>
	<tr><td>age<input type="text" id="age"></td></tr>
	<tr><td>class<input type="text" id="class"></td></tr>
	<tr><td colspan="2" align="center"><button>add</button></td></tr>

</table>
</body>
</html>