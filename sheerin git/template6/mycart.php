<?php
include("connection.php");
include("header.php");
include("menu.php");

$ids = $_COOKIE['pro_id'];
$arr= explode("#", $ids);
// print_r($arr);

?>
		
<!DOCTYPE html>
<html>
<head>
	<title>viewcart</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<div id="maindetail">    
        <div id="viewproductdetail">
        	<h3>Your Cart</h3>
			<table id="tab1"  align="center" cellpadding="5" cellspacing="0" width="70%" border="1">
			<tr>
				<th>sno</th>
				<th>product name</th>
        		<th>image</th>
				<th>product price</th>
			
        		<th>discount</th>
        		<th>new price</th>

				<th>delete</th>
			</tr>
				
				</tr>
					<?php
					$n=1;
					$total=0;
					foreach($arr as $x)
					{
						$query = "SELECT * FROM addproduct WHERE id= $x";
						 // echo $query;
						// die;
						$result = mysqli_query($con, $query);
						$data_pro = mysqli_fetch_assoc($result);
						$x = $data_pro['productprice']*$data_pro['discount']/100;

						$y = $data_pro['productprice']-$x;
						$total += $y;

						?>
						<tr>
							<td><?php echo $n;?></td>
							<td><?php echo $data_pro['productname'];?></td>
							<td><img src="../admin/uploads/<?php echo $data_pro['image'];?>" height="50" width="50" /></td>
							<td><?php echo $data_pro['productprice'];?></td>
							<!-- <td><?php echo $data_pro['category'];?></td> -->
							<td><?php echo $x;?></td>
							<td><?php echo $y;?></td>
							<td align="center"><a href="deleteproduct.php?pid=<?php echo $data_pro['id'] ;?>">remove</a></td>
						</tr>

						<?php
						$n++;
					}
					?>
					<tr>
						<td colspan="5" align="right">Grand Total</td>
						<td><?php echo $total; ?></td>
					</tr>


				</table>
				<h3 align="center" style="color:red"><a href="clearcart.php">Clear Cart</a></h3>
				
	</div>
</div>
</body>
</html>
<?php
include("footer.php");
?>