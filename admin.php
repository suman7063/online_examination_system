<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<style type="text/css">
	  body
	  {
       background-image: url('Colourful Glass Art Wallpapers (1).jpg');
	  }
	  a
	  {
	  	font-size:25px;
	  	position: absolute;
	  	top: 10px;
	  	left: 25px;
	  	text-decoration: none;
	  	color: black;
	  }
	  div
	  {
	  	border-radius:10%;
	  }
	  #first
	  {
	  	width: 150px;
	  	height: 50px;
	  	position: absolute;
	  	top: 80px; 
	  	right:50px; 
	  	background-color: white;
	  }
	  #first:hover
	  {
	  	background-color: green;
	  }
	</style>
</head>
<body>
<?php
include'db.php';
session_start();
$email_check = $_SESSION['username'];
$_check=$_SESSION['email'];
//without login not open this page
if(!isset($_SESSION['email']))
{
	header('location:index.php');
}
// varify admin again
$qu = mysqli_query($conn,"select user_type as name3 from login where email = '$_check'");
$qu1 = mysqli_fetch_array($qu,MYSQLI_ASSOC);
if($qu1['name3']=='')
{
header('location:index.php');
}
else
{
$sql = "SELECT * FROM login";
if (isset($sql)) {?>
<div id ="first"><a href="logout.php" style="font-size:20px;
	  	position: absolute;top:10px;left: 35px;text-decoration: none; color: black;">LOGOUT</a></div>
<div style="width: 200px;height: 50px;position: absolute;top: 350px; left:50px; background-color: white;"><a href="paper_view_admin.php"> View Paper</a></div>
<div style="width: 200px;height: 50px;position: absolute;top: 350px;left: 550px;background-color: white;" ><a href="admin_paper.php"> Question Entry</a></div>
<div style="width: 200px;height: 50px;position: absolute;top: 350px;right: 50px;background-color: white;"><a href="admin_update.php">Question Update</a> </div>
<?php
}
}
echo "<font color='white' style='position:relative;top:0px;left:0px;size='18' face='Arial''><marquee><i class='fa fa-user' aria-hidden='true' style='font-size: 35px; color: #92C50D'></i> &nbsp &nbsp Wecome To $email_check Page </marquee></font>";
?>
</body>
</html>