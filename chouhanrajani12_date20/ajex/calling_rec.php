<!DOCTYPE html>
<html>
<head>
	<title>reciving data</title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				// $("#body").html("good morning");

				$.ajax({
					url:"calling_rec_save.php",
					type:"get",
					success:function(rec){
						$("#tab").html(rec);
					}
				});
			});
		});
	</script>
</head>
<body>
 	<button>show</button>
 <table border="1"  id="tab" align="center">
	
</table> 



</body>
</html>