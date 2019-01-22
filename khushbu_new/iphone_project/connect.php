<?php

$con = mysqli_connect("localhost","root","","ssproject");
if(!$con)
{
die("connection failed");
}
session_start();
?>