<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				// $("div").css({"margin-left":"300px"});
			$("div").animate({"margin-left":"300px", "height":"300px", "width":"300px"}, 1000);
			$("div").animate({"margin-top":"300px"}, 1000);
			$("div").animate({"margin-left":"0px"}, 1000);
			$("div").animate({"margin-top":"0px", "height":"200px", "width" : "200px"}, 1000);
			});
		});
	</script>
	<style type="text/css">
		div{
			height: 200px;
			width: 200px;
			background-color: #336622;
		}
	</style>
</head>
<body>
<button>OK</button>
<div></div>
</body>
</html>