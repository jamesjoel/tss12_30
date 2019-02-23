<?php
include("../project/connect.php");
$a = $_POST['sid'];
$que = "SELECT * FROM city WHERE state_id = $a";

$result = mysqli_query($con, $que);
echo "<option>Select</option>";
while($data=mysqli_fetch_assoc($result))
{
	echo "<option>".$data['name']."</option>";
}

?>