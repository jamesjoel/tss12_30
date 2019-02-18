<?php
include("connect.php");
// include("header.php");

$query = "SELECT * FROM task";
$result = mysqli_query($con, $query);

// die;
?>
<!-- <div id="inside-content"> -->
	<!-- <h2>view image</h2> -->
	<!-- <hr> -->
	<form action="save.php" method="post">
	<div id="login-box">

		<table class="tab" align="center" cellpadding="5" cellspacing="0" border="1">
			<tr>
				<th>S.No.</th>
				<th>title</th>
				<th>main image</th>
				<th>view</th>
			</tr>
			<?php
			while($data=mysqli_fetch_assoc($result))
			{
			 ?>
				<tr>
					<td><?php echo $data['id'];?></td>
					<td><?php echo $data['title'];?></td>
					<td><img height="100" width="50" src="img/<?php echo $data['main_img']; ?>" /></td>
					<td><a href="viewmore.php">view</a></td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>
</div>
</body>
</html>