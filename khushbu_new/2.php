<?php
// print_r($_POST);
$a = $_POST['f_name'];
$b = $_POST['l_name'];
$c = $_POST['city'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	echo "<h1>".$a."</h1>";
	echo "<h1>".$b."</h1>";
	echo "<h1>".$c."</h1>";
?>
</body>
</html>