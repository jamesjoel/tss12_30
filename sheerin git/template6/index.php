
<?php
include("connection.php");
include("header.php");
include("menu.php");
$query="select * from addcategory";//category dynamically
$result=mysqli_query($con,$query);
$n=mysqli_num_rows($result);


$query_pro="select * from addproduct";//product dynamically
$result_pro=mysqli_query($con,$query_pro);


?>
<!DOCTYPE html>
<html>
<head>
	<title>flipkart</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="content">
	<div id="inside-content">
			<div id="inside-content-left">
				<div id="left1">
					<h3>category</h3>
					<ul>
					<?php
     				while($data=mysqli_fetch_assoc($result))
   		 				// print_r($data);
   					{
   		 			?>
						<li><a href="#"><?php echo $data['categoryname'] ;?>
							
							</a>
						</li>
					<?php
   					}

   					?>  
					</ul>				
				</div>
				<div id="left2">
					<h3>offers</h3>
					<img src="../images/win1.jpg"> 
					<img src="../images/win2.jpg"> 
					<img src="../images/win3.jpg"> 
				</div>

			</div>
			<div id="inside-content-right">
				<div id="right1">
					<marquee direction="left">
					<img src="../images/1.jpg"> 
					<img src="../images/2.jpg"> 
					<img src="../images/3.jpg"> 
					<img src="../images/4.jpg"> 
					<img src="../images/5.jpg">
					<img src="../images/6.jpg">  
					</marquee>
				</div>
				
				<div id="right2">
			
				</div>
				<div id="right3">
				<?php
   				while($data_pro=mysqli_fetch_assoc($result_pro))
   				 {
   				   // print_r($data_pro);
   				 	
   					 $discount=$data_pro['discount'];
   					 $price=$data_pro['productprice'];
   		   			 $x=$price*$discount/100;
   					 $new_price=$price-$x;
   					 // echo $new_price;
   				 
 				
   		 		?>
				<div class="right3-productbox">
				 <!-- <img src="../images/9.jpg">  -->
				 <img src="../admin/uploads/<?php echo $data_pro['image']; ?>" /> 
				 <p><?php echo $data_pro['productname'] ;?><p>
				 <h4 class="old_price"><?php echo $data_pro['productprice'] ;?></h4>
				<h4 class="new_price"><?php echo $new_price ;?></h4> 
				 <a href="addtocart.php?pid=<?php echo $data_pro['id']; ?>">add to cart</a>
				 <a href="viewmore.php?pid=<?php echo $data_pro['id']; ?>">view more</a>		 
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

</body>
</html>