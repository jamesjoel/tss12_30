<?php
include("header.php");
include("connect.php");


$que_res = mysqli_query($con,"SELECT * FROM add_product");
?>
	 	  	 <div id="right-content-bottom">
	 	  	 	  <h3>Latest</h3>


	 	  	 	  <?php
	 	  	 	   while($data_pro = mysqli_fetch_assco($que_res))
	 	  	 	   {

	 	  	 	  ?>
	 	  	 	  
	 	  	 	   <div class="product-box">
	 	  	 	     	<div class="image"><a href="#"><img src="images/1.jpeg" height="150" width="190"></a></div>
	 	  	 	     	<div class="detail"><p><?php echo $data_pro['name'];?></p></div>
	 	  	 	     	<div class="price"><p><?php echo $data_pro['price'];?></p></div>
	 	  	 	     		<!-- <p class="old-price"><?php echo $data_pro['price']?></p>
	 	  	 	     	    <p class="new-price"><?php echo $data_pro['name']?></p></div>
 -->
	 	  	 	     	  <?php } ?>  
	 	  	 	    </div> 
	 	  	 </div>
	 	  </div>
	 	</div> 
	 </div>
<?php
include("footer.php");
?>	