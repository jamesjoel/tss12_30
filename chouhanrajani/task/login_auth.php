<<?php 
$con=mysqli_connect("localhost","root","password","rajni");
// print_r($_POST);
// die;
$a=$_POST['username'];
$b=$_POST['pass'];
$query="SELECT * FROM user WHERE username=$a";
$result=mysqli_query($con,$query);

if(mysqli_num_rows($result)==1){

$data=mysqli_fetch_assoc($result);
if($data["password"]==$a)
{
	echo "yes";
}
else{
	echo "no";
}
}
?>
