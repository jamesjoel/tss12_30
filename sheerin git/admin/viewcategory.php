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
<<<<<<< HEAD
=======
      $n=1;
>>>>>>> c38ac84a220a4610d43c7f2abc25d6ac7d07ee22
   		while($data=mysqli_fetch_assoc($result))
   		 // print_r($data);
   			{
   		 ?>
   		<tr>
<<<<<<< HEAD
   			<td><?php echo $data['id'] ;?></td>
        <td><?php echo $data['categoryname'] ;?></td>
        <td><a href="#">edit</a></td>
        <td><a href="#">delete</a></td>
=======
   			<td><?php echo $n;?></td>
        <td><?php echo $data['categoryname'] ;?></td>
        <td><a href="editcategory.php?cid=<?php echo $data['id'] ;?>">edit</a></td>
        <td><a href="deletecategory.php?cid=<?php echo $data['id'] ;?>">delete</a></td>
>>>>>>> c38ac84a220a4610d43c7f2abc25d6ac7d07ee22
   		
      </tr>

   		<?php
<<<<<<< HEAD
=======
      $n++;
>>>>>>> c38ac84a220a4610d43c7f2abc25d6ac7d07ee22
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
