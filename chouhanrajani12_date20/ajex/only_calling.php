<!DOCTYPE html>
<html>
<head>
	<title>ajex page...</title>
	
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$.ajax({
					url:"only_save.php",
					type:"get"
				});

			});
		});

	</script>
</head>
<body>

 
 <button>delete</button>
</body>
</html>