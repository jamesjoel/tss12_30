<?php
 include("connect.php");
 include("header.php");
if(isset($_GET['productcategory']))
{
	$a=$_GET['productcategory'];
	$pro_query="SELECT * FROM product WHERE productcategory=$a";
}
else{

	$pro_query="SELECT * FROM product";
}
$pro_result=mysqli_query($con,$pro_query);
?>
			
			
				<div class="right-content-block">
				<h3>New Products</h3>
				<?php
				while($data_pro = mysqli_fetch_assoc($pro_result))
				{
					$discount = $data_pro['productdiscount'];
					$price = $data_pro['productprice'];
					$x = $price*$discount/100;
					$new_price=$price-$x;
				?>
			
			
				<div class="right-content-block">

					<div class="right-content-subblock">
					<div class="right-blockleft">
						<img src="image/<?php echo $data['product_img']; ?>"class="img" />
					</div>
					<div id="right-block2">
						<p><?php echo $data_pro['productname']; ?></p>
						<p class="old_price">$ <?php echo $data_pro['productprice']; ?></p>
						<p class="new_price">$ <?php echo $new_price; ?>.00</p>
						<a href="view_more.php?pid=<?php echo $data_pro['id']; ?>" class="view-more-btn">View</a>
						<a href="add_to_cart.php?pid=<?php echo $data_pro['id']; ?>" class="view-more-btn">Add To Cart</a>
					</div>	
					</div>
					
		</div>
	</div>
	<?php 
			}
			?>
					
</div>
<?php
 include("footer.php");


?>