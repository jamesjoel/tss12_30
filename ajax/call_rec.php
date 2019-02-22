<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				// $("#box").html("hello world");	

				$.ajax({
					url : "call_rec_server.php",
					type : "get",
					success : function(rec){
						$("#box").html(rec);
					}
				});
			});		
		});
	</script>
</head>
<body>
<button>Show</button>
<table id="box" border="1">
	
</table>
</body>
</html>