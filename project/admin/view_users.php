<?php
include("../connect.php");
if(!isset($_SESSION['is_admin_logged_in']))
{
	header("location:index.php");
}

include("header.php");

$query = "SELECT * FROM user";
$result = mysqli_query($con, $query);
?>	
<div id="content">
	<h3>View All Users</h3>
	
	<div id="login-box" style="width: 650px !important;">
		<table class="tab" align="center">
			<tr>
				<th>S.No.</th>
				<th>Full Name</th>
				<th>Username</th>
				<th>Conact</th>
				<th>Pincode</th>
				<th>Status</th>
				<th>Change</th>
			</tr>
			
			<?php
			$n=1;
			while($data=mysqli_fetch_assoc($result))
			{ 

				if($data['status']==1)

				if($data['status'])
					$x="Active";
				else
					$x="Deactive";
				?>
				<tr>
					<td><?php echo $n; ?></td>
					<td><?php echo $data['full_name'];?></td>
					<td><?php echo $data['username'];?></td>
					<td><?php echo $data['contact'];?></td>
					<td><?php echo $data['pincode'];?></td>
					<td><?php echo $x;?></td>
					<td><a class="change-btn" href="change_status_user.php?uid=<?php echo $data['id'] ?>&status=<?php echo $data['status'] ?>">Change</a></td>
				</tr>



			<?php
			$n++;
			}
			?>
		</table>
	</div>
</div>
</body>
</html>