<?php
$conn=mysqli_connect("localhost","root","","on_line");
if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}
else
{
	$a='<h2>NOW REGISTERED........</h2>';
}
?>