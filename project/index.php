<?php
include("connect.php");
include("header.php");
if(isset($_GET['q']))
{
	$key = $_GET['q'];
	$query_pro = "SELECT * FROM product WHERE product_name LIKE '%$key%'";
	if(isset($_GET['adv']))
	{
		if($_GET['min']!="" && $_GET['max']=="")
		{
			$query_pro = "SELECT * FROM product WHERE product_name LIKE '%$key%' AND product_price >=".$_GET['min'];
		}
		if($_GET['min']=="" && $_GET['max']!="")
		{
			$query_pro = "SELECT * FROM product WHERE product_name LIKE '%$key%' AND product_price <=".$_GET['max'];
		}
		if($_GET['min']!="" && $_GET['max']!="")
		{
			
			// $query_pro = "SELECT * FROM product WHERE product_name LIKE '%$key%' AND price BETWEEN ".$_GET['min']." AND ".$_GET['max'];
			$query_pro = "SELECT * FROM product WHERE product_name LIKE '%$key%' AND product_price >= ".$_GET['min']." AND product_price <=".$_GET['max'];
			// SELECT * FROM product WHERE propcut_name LIKE '%saree%' AND price >=2000 AND price <= 5000
		}
	}
	// echo $query_pro;die;





}
else
{

	if(isset($_GET['category']))
	{
		$a = $_GET['category'];	
		$query_pro = "SELECT * FROM product WHERE category = $a";
	}
	else
	{

		$query_pro = "SELECT * FROM product";
	}

}









$result_pro = mysqli_query($con, $query_pro);


?>
<style type="text/css">
	#search-adv{
		font-size: 13px;
	}
	.adv-txt{
		width: 50px;

	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$("#adv-search-btn").click(function(){
			$("#adv-box").slideDown(1000);
		});
	});
</script>


			<div id="right-content-bottom">
				<?php
				if(isset($_GET['q']))
				{ ?>
					<div style="float: right;" id="search-adv">
					<a href="#" id="adv-search-btn">Advance Search</a>
					<div id="adv-box" style="display: none;">
						<form action="index.php" method="get">
							Price Min <input class="adv-txt" name="min" type="text" />
							Price Max <input class="adv-txt" name="max" type="text" />
							Keyword <input class="adv-txt" name="q" type="text" value="<?php echo $_GET['q'];?>" />
							<input type="hidden" name="adv" value="true">
							<input type="submit" value="Go">
						</form>
					</div>
				</div>
				<?php
				}
				?>
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
						<a href="view_more.php?pid=<?php echo $data_pro['id']; ?>" class="view-more-btn">View</a>
						<a href="add_to_cart.php?pid=<?php echo $data_pro['id']; ?>" class="view-more-btn">Add To Cart</a>
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