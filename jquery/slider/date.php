<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="jquery-ui.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$( "#mydate" ).datepicker({
				showAnim : "bounce",
				showOtherMonths: true,
				changeMonth: true,
      			changeYear: true
			});
		});
	</script>
</head>
<body>
DOB <input type="Text" id="mydate" />
</body>
</html>