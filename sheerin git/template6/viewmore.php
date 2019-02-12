<?php
include("connection.php");
include("header.php");
include("menu.php");

// print_r($_GET);
$x=$_GET['pid'];

?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
$query_pro = "SELECT * FROM addproduct WHERE id = $x";

$result_pro = mysqli_query($con, $query_pro);
$data_pro = mysqli_fetch_assoc($result_pro);

?>
			<div id="maindetail">    
        <div id="viewproductdetail">
				<h3>product Detail</h3>
				<table  align="center"style="color:white" height="400" width="600">
				<tr><td>product name: </td>
				<td><?php echo $data_pro['productname'];?></td>
				<td rowspan="4"><img height="400" width="400" src="../admin/uploads/<?php echo $data_pro['image'] ?>"/></td>
			    </tr>
				<tr><td>product price: </td>
					<td><?php echo $data_pro['productprice'];?></td></tr>
				<tr><td>discount:</td>
					<td><?php echo $data_pro['discount'];?></td></tr>
				<tr><td>detail:</td>
				<td> <?php echo $data_pro['detail'];?></td></tr>
			</table>
			</div>
		</div>


<?php
include("footer.php");
?>