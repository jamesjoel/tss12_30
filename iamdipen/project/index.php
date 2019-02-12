<?php
include("connect.php");
include("header.php");


$result = mysqli_query($con,"SELECT * FROM add_product");
?>
 <div id="right-content-bottom">
	 	  	 <h3>Latest</h3>

  <?php 
      while($data =mysqli_fetch_assoc($result))
    { 
      $discount=$data['discount'];
      $price=$data['price'];
      $m=$price*$discount/100;
      $new_price=$price-$m;
      ?>
      
 <div class="product-box">
	
       <div class="image"><a href="#"><img src="/adminpanel/upload/" height="150" width="190"><?php echo $data['image'];?>><a></div>
       <div class="detail"><p><?php echo $data['details'];?></p></div>
	   <div class="price">
	 	  	 <p class="old-price"><?php echo $data['price'];?></p>
	 	  	 <p class="new-price"><?php  echo '$new_price';?></p></div>
	
</div>
    
   <?php } ?>

</div>

	 	
<?php
include("footer.php");
?>	