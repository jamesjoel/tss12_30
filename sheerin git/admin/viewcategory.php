<?php
include("header.php");
include("../template6/connection.php");
if(!isset($_SESSION['admin_loged_in']))
{
    header("location:index.php");
}
include("menu.php");
$query="select * from addcategory";
$result=mysqli_query($con,$query);
$n=mysqli_num_rows($result);
// echo $n;
if($n>0)
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>viewcategory</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		<div id="maindetail">    
        <div id="viewproductdetail">
		<table id="tab1"  align="center">
			<tr>
				<th>sno</th>
        <th>category name</th>
        <th>edit</th>
				<th>delete</th>
			</tr>
   		<?php
      $n=1;
   		while($data=mysqli_fetch_assoc($result))
   		 // print_r($data);
   			{
   		 ?>
   		<tr>
   			<td><?php echo $n;?></td>
        <td><?php echo $data['categoryname'] ;?></td>
        <td><a href="#">edit</a></td>
        <td><a href="deletecategory.php?cid=<?php echo $data['id'] ;?>">delete</a></td>
   		
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
