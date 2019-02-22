<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				var a = $("#name").val();
				var b = $("#age").val();

				$.ajax({
					url : "call_send_server.php",
					type : "post",
					data : { x : a, y : b }
				});

			});		
		});
	</script>
</head>
<body>
Name <input type="text" id="name"/>
<Br />
<Br />
Age <input type="text" id="age"/>
<br />
<br />
<button>Add</button>
</body>
</html>