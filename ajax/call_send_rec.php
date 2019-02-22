<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div{
			margin: 20px auto;
			background-color: #ccc;
			border-radius: 10px;
			padding: 20px;
			width: 400px;
			text-align: center
		}
		button{
			background-color: #457845;
			padding: 10px;
			border:none;
			border-radius: 5px;
			color: #FFF;
			margin: 5px;
		}
		div table{
			border-collapse: collapse;
		}
		div table td{
			padding: 5px;
			width: 100px;
			border:1px solid #000;
		}
	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$("button").click(function(){
				var a = $("#name").val();
				var b = $("#age").val();
				$.ajax({
					url : "call_send_rec_server.php",
					type : "post",
					data : { name : a, age : b},
					success:function(rec){
						$("#tab").html(rec);
						$("#name").val("");
						$("#age").val("");
					}
				});

			});

			$.ajax({
				url : "call_rec_server.php",
				type : "get",
				success : function(rec){
					$("#tab").html(rec);
				}
			});
		});
	</script>
</head>
<body>
<div>
	Name <input type="Text" id="name"/>
	<Br />
	<Br />
	Age <input type="text" id="age"/>
	<br />
	<button>Add</button>
	<table id="tab" align="center">
		<tr>
			<td>S.No.</td>
			<td>Name</td>
			<td>Age</td>
		</tr>

	</table>
</div>
</body>
</html>