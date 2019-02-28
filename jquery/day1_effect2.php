<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("a").mouseover(function(){
				// $("p").fadeIn(1000);
				$("p").slideDown(1000);
			});
			$("a").mouseout(function(){
				// $("p").fadeOut(1000);
				$("p").slideUp(1000);
			});
		});
	</script>
	<style type="text/css">
		p{
			width: 300px;
			padding: 10px;
			background-color: #CCC;
			margin: 0;
			border-radius: 10px;
			box-shadow: 10px 10px 10px #000;
			display: none;
		}
	</style>
</head>
<body>
<a href="#">Help</a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>