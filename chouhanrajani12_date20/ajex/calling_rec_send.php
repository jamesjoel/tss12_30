<!DOCTYPE html>
<html>
<head>
	<title>receving and sending </title>
	<script type="text/javascript" src="jquery.js"></script>
	<style type="text/css">
		#box{
			height: 100px;
			width: 300px;
			background-color: #aabbaa;
			margin:0 auto;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				var a=$("#name").val();
				var b=$("#age").val();
				var c=$("#clas").val();

				$.ajax({
					url:"calling_rec_send_save.php",
					type:"post",
					data:{ x:a, y:b, z:c},

					success:function(rec){
						$("table").html(rec);
						$("#name").val("");
						$("#age").val("");
						$("#clas").val("");
					}
				});

			});
		

		$.ajax({//for data one time show in table
			url:"calling_rec_save.php",
			type:"get",
			success:function(rec){
				$("table").html(rec);
			}
		});

	});

	</script>
</head>
<body>
	
	<div id="box">
	<tr><td>
	name<input type="text" id="name"></td></tr>
	<tr><td>age<input type="text" id="age"></td></tr>
	<tr><td>class<input type="text" id="clas"></td></tr>
</tr>
<br>
<br>
<br>
<button>ok</button>
</div>

<br>
<br>
<br>
	<table border="1" align="center">
		<tr><td>so.no</td></tr>
		<tr><td>age</td></tr>
		<tr><td>class</td></tr>
</table>

</body>
</html>