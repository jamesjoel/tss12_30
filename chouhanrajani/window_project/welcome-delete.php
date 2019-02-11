<?php 
$id = $_GET['id'];

// Get record for id & key with mysql

$key = 1234;
 
?>
<h1>Thanks for registration</h1>
<a href="account-active.php?id=<?php echo $id; ?>&key=<?php echo $key; ?> ">Click for active account</a>