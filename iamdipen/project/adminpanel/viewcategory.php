<?php
include("../connect.php");
include("header.php")

$query = "SELECT * FROM addcategory";
$result= mysquli_query($con, $query);
die;

?>
 <div id="content">
 	<h2>View Category</h2>
 	<hr>
 	<div id="login">
 		<table align="center">
 			<tr>
 				<th>S.No.</th>
 				<th>category_name</th>
 			</tr>
 			<?php

 			?>
 		</table>
 	</div>

 </div>