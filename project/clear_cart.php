<?php
setcookie("product_id", "", time()-1);
header("location:index.php");
?>