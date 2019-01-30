<?php
include("connect.php");
include("header.php");

if(isset($_GET['category']))
{
	$a = $_GET['category'];	
	$query_pro = "SELECT * FROM product WHERE category = $a";
}
else
{

	$query_pro = "SELECT * FROM product";
}



$result_pro = mysqli_query($con, $query_pro);

?>
			<div id="right-content-bottom">
				<h3>New Products</h3>
				<?php
				while($data_pro = mysqli_fetch_assoc($result_pro))
				{
					$discount = $data_pro['discount'];
					$price = $data_pro['product_price'];
					$x = $price*$discount/100;
					$new_price=$price-$x;
				?>

				<div class="product-box">
					<div class="product-box-top">
						<img src="upload/<?php echo $data_pro['product_image']; ?>" />
					</div>
					<div class="product-box-bottom">
						<p><?php echo $data_pro['product_name']; ?></p>
						<p class="old_price">$ <?php echo $data_pro['product_price']; ?></p>
						<p class="new_price">$ <?php echo $new_price; ?>.00</p>
						<a href="view_more.php?pid=<?php echo $data_pro['id']; ?>" class="view-more-btn">View More</a>
					</div>
				</div>
				
			<?php 
			}
			?>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>