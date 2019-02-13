<?php
include("connect.php");
if(! isset($_SESSION['is_user_logged_in']))
{
	header("location:login.php");
}
include("header.php");
?>
			<div id="right-content-bottom">
				<h3>Welcome : <?php echo $_SESSION['name'] ?></h3>
			</div>
		</div>
		<div id="left-content">
			<div id="left-menu">
				<h3>Products</h3>
				<ul>
					<li><a href="#">Women handbags</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Kids</a></li>
					<li><a href="#">Winter Store</a></li>
					<li><a href="#">Clothing</a></li>
					<li><a href="#">Watches</a></li>
					<li><a href="#">Footwear</a></li>
					<li><a href="#">Jewellery</a></li>
					<li><a href="#">Toys</a></li>
					<li><a href="#">Fragrances</a></li>
					<li><a href="#">Beauty Wellness</a></li>
					<li><a href="#">School Supplies</a></li>
					<li><a href="#">Eyewear</a></li>
				</ul>
			</div>
		</div>
<?php
include("footer.php");
?>