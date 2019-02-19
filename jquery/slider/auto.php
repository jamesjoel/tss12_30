<?php
$con=mysqli_connect("localhost", "admin", "admin", "tss12_30");

$query = "SELECT * FROM product";

$result = mysqli_query($con, $query);
$str="";

while($data=mysqli_fetch_assoc($result))
{
	$str .= "'".$data['product_name']."',";
}
$str = rtrim($str, ",");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="jquery-ui.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			var arr = [<?php echo $str; ?>];
			$("#search").autocomplete({
				source : arr
			});




		});
	</script>
</head>
<body>
<br />
Search <input type="Text" id="search" />
</body>
</html>