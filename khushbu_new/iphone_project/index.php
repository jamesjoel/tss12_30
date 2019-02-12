<?php
include("connect.php");
include("header.php");
include("menu.php");

// print_r($_COOKIE);


$que_res = mysqli_query($con, "SELECT * FROM add_product");

?>
<div id="content">
		<div id="inside-content">
			<div id="left-content">
			<div id="left-content-top">
				<h3>Category</h3>

			   <ul>
				<!-- <li><a href="#">CATEGORY</a></li> -->
				<li><a href="#">DEMO1</a></li>
				<li><a href="#">DEMO2</a></li>
				<li><a href="#">DEMO3</a></li>
				<li><a href="#">DEMO4</a></li>
			   </ul>
			</div>
			<div class="left-content-bottom">	
			<div class="left-content-bottom-up">
				<h4>LATEST</h4>
				<div class="product-box-left">
					<!-- <p>product</p> -->
					<div class="product-box-left-img">
						<img src="css/images (2).jpg" />
					</div>
					<div class="product-box-left-bottom1">
					    <p style="color: #FFF">product 1</p>
					    <p>$10.00</p>	
					</div>
					<div class="product-box-left-bottom2">
						<!-- <p>'add cart</p> -->
						<a href="#">add cart</a>
					</div>
					<br>
					<br>
					<div class="product-box-left">
					<div class="product-box-left-img">
						<img src="css/images (2).jpg" />
					</div>
					<div class="product-box-left-bottom1">
					    <p style="color: #FFF">product 2</p>
					    <p>$10.00</p>	
					</div>
					<div class="product-box-left-bottom2">
						<!-- <p>add cart</p> --><input type="button" name="add cart" value="add cart" />
					</div>
				</div>
			</div>
			</div>
			</div>
			</div>
			<div id="right-content">
				<div id="right-content-top">
					<img src="css/banner1.jfif" />
				</div>
				<br>
				<div id="right-content-bottom">
					<div id="right-content-bottom-up">
						<h4>LATEST</h4>

						<?php 
						while($data_pro = mysqli_fetch_assoc($que_res))
						{ ?>

						<div class="product-box">
							<div class="product-box1">
								<div class="product-box1-img">
									<img src="upload/<?php echo $data_pro['pro_image']; ?>"height="50" width="30";/>
								</div>
								<div class="product-box2">
									<p style="color: #FFF"><?php echo $data_pro['product_name'];?></p>
									<p style="color: #000">$ <?php echo $data_pro['product_price'];?></p>
									<a href="view_more.php?pid=<?php echo $data_pro['id']; ?>">View</a>
									<a style="float: right" href="add_to_cart.php?pid=<?php echo $data_pro['id'] ?>">add cart</a>
								</div>
							</div>
						</div>
						<?php } ?>
						
					</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	include("footer.php");
	?>
