
<?php
include("header.php");
include("../template6/connection.php");
if(! isset($_SESSION["admin_loged_in"]))
 { //not open myaccount page when not login through login page and redirect to login.
    header("location:index.php");
 }
include("menu.php");

$query="select * from addproduct";
$result=mysqli_query($con,$query);
$n=mysqli_num_rows($result);
// echo $n;
// if($n>0)
// {
?>
<!DOCTYPE html>
<html>
<head>
	<title>viewproduct</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<div id="maindetail">    
        <div id="viewproductdetail">
		<table id="tab1"  align="center">
			<tr>
				<th>sno</th>
				<th>product name</th>
				<th>product price</th>
				<th>category</th>
        <th>discount</th>
        <th>image</th>
        <th>edit</th>
				<th>delete</th>
			</tr>
   		<?php
      if($n>0)
      {
      $a=1;
   		while($data=mysqli_fetch_assoc($result))
   		  // print_r($data);
      {
   		 ?>
   		<tr>
   			<td><?php echo $a;?></td>
   			<td><?php echo $data['productname'] ;?></td>
   			<td><?php echo $data['productprice'] ;?></td>
   			<td><?php echo $data['category'] ;?></td>
   			<td><?php echo $data['discount'] ;?></td>
        <td><img src="uploads/<?php echo $data['image']; ?>"height="100" width="100"/></td>
    <td><a href="editproduct.php?pid=<?php echo $data['id'] ;?>">edit</a></td>
    <td><a href="deleteproduct.php?pid=<?php echo $data['id'] ;?>">delete</a></td>
      
   		</tr>

   		<?php
      $a++;
   		}
   		?>
   	</table>
	<?php
   	}
   	?>          
    </div>
    </div>
    </body>
</html>
