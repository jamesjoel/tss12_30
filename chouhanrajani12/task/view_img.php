<?php
$con=mysqli_connect("localhost","root","password","task");

$query="SELECT * FROM image ";
$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);
// echo $data["main_img"];
// die;

$n=0;
while($data=mysqli_fetch_assoc($result))
{?> 

<body>
	<!-- <h4 align="center">view image</h4> -->
	<table align="center" height="200" width="100" border="1" cellpadding="10" cellspacing="0">
		<tr>
				<td><?php echo$data['id']; ?></td> 
			
			
				<td><?php echo$data['title']; ?></td>
				
				<td><img src="upload/<?php echo$data['main_img'];?>" height="50" width="50"/>
				</td>
			
				<td><a href="view_more.php?pid=<?php echo$data['id']; ?>">view-image</a>
			</tr>
			

				
			
		

	</table>
<?php
$n++;	
}?>






</body>
</html>