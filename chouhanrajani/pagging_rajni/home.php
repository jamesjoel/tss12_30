<?php
$con=mysqli_connect("localhost","root","password","rajni");
$rec_perpage=10;
$x=1;
$n=1;

if(isset($_GET['pageno']))
{
	$x=$_GET['pageno'];
	$a=$_GET['pageno'];
	$a=$a-1;
	$b=$a*$rec_perpage;
	$n=$b+1;
	$query="SELECT * FROM cities LIMIT $b,$rec_perpage";
}
else{
	$query="SELECT * FROM cities LIMIT $rec_perpage";
}

$result = mysqli_query($con, $query);
$query="SELECT COUNT(*) total FROM cities";

$total_result=mysqli_query($con,$query);
$total_rec=mysqli_fetch_assoc($total_result);
$total_data=$total_rec['total'];
// echo $total_data;
// die;
$total_page=ceil($total_data/$rec_perpage);
?>
<!DOCTYPE html>
<html>
<head>
	<title>my pagging page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="header">
	<div id="in-header">
		<h2>Stepping Stone</h2>
	</div>
</div>
<div id="menu">
	<div id="in-menu">
		
	</div>
</div>
<div id="content">
	<div id="in-content">
		<a href="home.php?pageno=<?php echo $x+1;?>">nex</a>


		<?php
		for($i=1;$i<=$total_page;$i++){

		}
		?>
		
		<table align="center" cellspacing="0" cellpadding="5" border="1">
			<tr><td>Sno</td>
				<td>cities</td>
				<td>states</td>
			</tr><?php
		
		while($data=mysqli_fetch_assoc($result))
		{ ?>
			<tr>
				<td><?php echo $n; ?></td>
				<td><?php echo $data['city_name']; ?></td>
				<td><?php echo $data['city_state']; ?></td>
			</tr>

		<?php 
		$n++;
		}
		?>

<a href="home.php?pageno=<?php echo $x-1;?>">pre</a>
		</table>

	</div>
</div>
<div id="footer">
	<div id="in-footer">
		<p>contact us:stepping_stone@gmail.com</p>
	</div>
</div>
</body>
</html>