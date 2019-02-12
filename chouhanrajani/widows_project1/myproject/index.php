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

					<div class="right-content-subblock">
					<div class="right-block1">
						<img src="upload/<?php echo $data['product_img']; ?>"class="img" />
					</div>
					<div class="right-block2">
						<p>TFT Monitor</p>
							<p>morbi nunc odio,
							gravida at,cursus
							price:<span class="rup">$147.99</span>
							<input type="button" value="Buy" class="buy"><input type="button" value="sell" class="sell"></p>
					</div>	
					</div>
					 <div class="right-content-subblock">
						<div id="right-block3">
							<img src="image/6.jpg" class="img" />
						</div>
						<div id="right-block4">
							<p>TFT Monitor</p>
							<p>morbi nunc odio,
							gravida at,cursus
							price:<span class="rup">$147.99</span>
							<input type="button" value="Buy" class="buy"><input type="button" value="sell" class="sell"></p>
						</div>
					</div> 
					<div class="right-content-subblock">
						<div id="right-block5">
							<img src="image/3.jpg"class="img" />
						</div>
						<div id="right-block6">
							<p>TFT Monitor</p>
							<p>morbi nunc odio,
							gravida at,cursus
							price:<span class="rup">$147.99</span>
							<input type="button" value="Buy" class="buy"><input type="button" value="sell" class="sell"></p>
						</div>
					</div>
					<div class="right-content-subblock">
						<div id="right-block7">
							<img src="image/vaio.jpg" class="img"/>
						</div>
						<div id="right-block8">
							<p>TFT Monitor</p>
							<p>morbi nunc odio,
							gravida at,cursus
							price:<span class="rup">$147.99</span>
							<input type="button" value="Buy" class="buy"><input type="button" value="sell" class="sell"></p>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
 include("footer.php");


?>