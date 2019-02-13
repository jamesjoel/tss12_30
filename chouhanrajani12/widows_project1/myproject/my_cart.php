<?php
include("connect.php");
include("header.php");

$ids = $_COOKIE['product_id'];
$arr_id = explode("#", $ids);
?>
			<div id="right-content-bottom">
				<h3>Your Cart</h3>
				<a href="clear_cart.php">Clear Cart</a>
				<table align="center" cellpadding="5" cellspacing="0" width="80%" border="1">
					<tr>
						<th>S.No.</th>
						<th>Product Name</th>
						<th>Image</th>
						<th>Price</th>
						<th>Discounted Price</th>
					</tr>
					<?php
					$n=1;
					$total=0;
					foreach($arr_id as $x)
					{
						$que = "SELECT * FROM product WHERE id= $x";
						$res = mysqli_query($con, $que);
						$data_pro = mysqli_fetch_assoc($res);
						$x = $data_pro['productprice']*$data_pro['discount']/100;
						$y = $data_pro['productprice']-$x;
						$total += $y;

						?>
						<tr>
							<td><?php echo $n;?></td>
							<td><?php echo $data_pro['productname'];?></td>
							<td><img src="upload/<?php echo $data_pro['product_img'];?>" height="50" width="50" /></td>
							<td><?php echo $data_pro['productprice'];?></td>
							<td><?php echo $y;?></td>
						</tr>

						<?php
						$n++;
					}
					?>
					<tr>
						<td colspan="4" align="right">Grand Total</td>
						<td><?php echo $total; ?></td>
					</tr>


				</table>
				<Br />
				<Br />
				<Br />
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>












