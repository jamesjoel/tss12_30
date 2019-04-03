<?php
$data = array("id"=>5, "name"=>"rohit", "age"=>25);





$que = "SELECT * FROM user WHERE age < ".$data['age'];

// $que = "SELECT * FROM user WHERE age < 25";


$que = "SELECT * FROM user WHERE name = '".$data['name']."'";

// SELECT * FROM user WHERE name='rohit
















?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

echo "<a href='test.php?id=".$data['id']."&name=".$data['name']."&age=".$data['age']."'>Hello</a>";

// test.php?id=5&name=rohit&age=25
?>






</body>
</html>