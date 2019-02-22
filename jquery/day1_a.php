<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				 $("div").hide();
			});
		});
	</script>
	<style type="text/css">
		div{
			height: 300px;
			width: 300px;
			background-color: #AC2589;
		}
	</style>
</head>
<body>
<button>OK</button>
<div></div>
</body>
</html>