<?php
include("connect.php");
include("header.php");

$a = $_GET['pid'];


$query_pro = "SELECT * FROM add_product WHERE id = $a";

$result_pro = mysqli_query($con, $query_pro);
$data_pro = mysqli_fetch_assoc($result_pro);

?>
			<div id="right-content-bottom">
				<h3>Detail</h3>
				<img height="100" width="50" src="upload/<?php echo $data_pro['pro_image'] ?>" />
				<h3><?php echo $data_pro['product_name'];?></h3>
				<h4>Category</h4>
				<p><?php echo $data_pro['product_price'];?></p>
				<p><?php echo $data_pro['detail'];?></p>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>