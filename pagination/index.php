<?php
$con=mysqli_connect("localhost", "admin", "admin", "tss12_30");

$rec_per_page = 100;
$n=1;
$x=1;
if(isset($_GET['pageno']))
{
	$x=$_GET['pageno'];
	$a = $_GET['pageno'];
	$a = $a-1;
	$b = $a*$rec_per_page;
	$n=$b+1;
	$que = "SELECT * FROM cities LIMIT $b, $rec_per_page";
	
}
else
{
	$que = "SELECT * FROM cities LIMIT $rec_per_page";
	
}




$result = mysqli_query($con, $que);


$total_rec_data = mysqli_fetch_assoc(mysqli_query($con, "SELECT COUNT(*) AS total FROM cities"));
$total_rec = $total_rec_data['total'];

$total_page = ceil($total_rec/$rec_per_page); // 1401/100




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: #CCC;
			font-family: Helvetica;
		}
		div{
			margin: 20px auto;
			width: 600px;
			text-align: center;
			background-color: #FFF;
			padding: 10px;
			min-height: 400px;
		}
		table{
			border-collapse: collapse;
			/*width: 380px;*/
		}
		table tr td, tr th{
			border:1px solid #000;
			padding: 5px 20px;
			font-size: 14px;
		}
		a{
			text-decoration: none;
			display: inline-block;
			padding: 3px;
			border:1px solid #000;
			margin: 2px;
			color: #000;
		}
		a:hover{
			background-color: #000;
			color: #FFF;
		}
		.active{
			background-color: #000 !important;
			color: #FFF !important;	
		}
	</style>
</head>
<body>
<center><h1>Pagination</h1></center>
<div>
	<a href="index.php?pageno=<?php echo $x-1; ?>"><< Pre</a>
	<?php
	for($i=1; $i<=$total_page; $i++)
	{ 
		if($x==$i)
		{ ?>
		<a class="active" href="index.php?pageno=<?php echo $i; ?>"><?php echo $i; ?></a>

		<?php
		}else{ ?>
		<a href="index.php?pageno=<?php echo $i; ?>"><?php echo $i; ?></a>

		<?php }
	}
	?>
	<a href="index.php?pageno=<?php echo $x+1; ?>">Next >></a>




	<table align="center">
		<tr>
			<th>S.No.</th>
			<th>City Name</th>
			<th>State Name</th>
		</tr>
		<?php
		
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


	</table>
</div>
</body>
</html>