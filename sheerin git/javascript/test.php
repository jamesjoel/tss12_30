<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<style>
	#box{
	height:400px;
	width:500px;
	background-color:#abc678;
	margin:10px auto;
	border-radius: 30px;
	}
	table a
	{
	color:red;	
	padding-left:20px;
	}
	</style>
</head>
<body>
	<div id="box">
<form action="testsave.php" method="post" enctype="multipart/form-data">
	<table  align="center" cellspacing="10px" cellpadding="10px">
		<tr>
			<td>Title</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr><td>main image</td>
			<td><input type="file" name="mainimg"></td>
		</tr>
		<tr>
			<td>first image</td>
			<td><input type="file" name="firstimg"></td>
		</tr>
		<tr>
			<td>second image</td>
			<td><input type="file" name="secondimg"></td>
		</tr>
		<tr>
			<td>third image</td>
			<td><input type="file" name="thirdimg"></td>
		</tr>
		<tr>
			<td>fourth image</td>
			<td><input type="file" name="fourthimg"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="submit" >
			<a href="view.php">view all images</a></td>
		
		</tr>
</table>
</form>
</div>
</body>
</html>