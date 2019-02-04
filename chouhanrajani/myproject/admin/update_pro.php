<?php
include("../connect.php");
$a=$_POST['productname'];
$b=$_POST['productprice'];
$c=$_POST['detail'];
$d=$_POST['productcategory'];
$e=$_POST['productdiscount'];

?>
<form action="update_product.php" method="post">
		<input type="hidden" name="pid" value="<?php echo $a; ?>"/>
		