<?php
include("header.php");
include("../template6/connection.php");
if(!isset($_SESSION['admin_loged_in']))
{
    header("location:index.php");
}
include("menu.php");

$query="select * from user";
$result=mysqli_query($con,$query);
$n=mysqli_num_rows($result);
// echo $n;
if($n>0)
{
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
				<th>user name</th>
				<th>email id</th>
				<th>contact</th>
				<th>pincode</th>
        <th>status</th>
        <th>change</th>

			</tr>
   		<?php
      $n=1;
   		while($data=mysqli_fetch_assoc($result))
      {
   		 // print_r($data);
        if($data['status']==1)
          $x="Active";
        else 
          $x="Deactive";
   		 ?>
   		<tr>
   			<td><?php echo $n ;?></td>
   			<td><?php echo $data['name'] ;?></td>
   			<td><?php echo $data['emailid'] ;?></td>
   			<td><?php echo $data['mno'] ;?></td>
        <td><?php echo $data['pincode'] ;?></td>
        <td><?php echo $x;?></td>
        <!-- or -->
        <!-- <td><?php echo $data['status'] ;?></td> -->

   			<td><a href="change_userstatus.php?uid=<?php echo $data['id']?> &status=<?php echo $data['status']?>">
        change</a></td>
   		</tr>

   		<?php
      $n++;
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
