<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="demo.php?a=rohit">Click</a>
<?php
if(isset($_GET['a']))
{
	echo $_GET['a'];
}

?>
</body>
</html>