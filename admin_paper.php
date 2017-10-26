<!DOCTYPE html>
<html>
<head>
<title>paper</title>
<style type="text/css">
    body
    {
    	background-image: url('Colourful Glass Art Wallpapers (1).jpg');
    	background-size: 100% 1000px; 
		background-repeat: no-repeat;
		opacity:0.9;

    }
	input[type="text"]:hover
	{
		background-color:lightgreen;
	}
	input[type="text"]
	{
		height:30px;
		width: 300px;
	}
	td
	{
     font-size:25px;
     color: white;
	}
	fieldset
	{    
		 width: 80%;
		 height: 70%;
		 position: relative;
		 left: 10%;
		 top:100px;

		 /*background-image:url('images.jpg');
		 background-size: 100% 100%; 
		 background-repeat: no-repeat;*/
	}
	legend
	{
		font-size:40px;
		color: white;
	}
	a
	{
		font-size: 20px;
		color: black;
		text-decoration: none;
		position: absolute;
		top: 10px;
		left: 20px;
	}
</style>
</head>
<body>
<div style="position: absolute;left: 50px;top:70px;background-color: white; width: 100px;height: 40px;"><a href="admin.php">HOME</a></div>
<div style="position: absolute;right: 50px;top:70px;background-color: white; width: 110px;height: 40px;"><a href="logout.php">LOGOUT</a></div>
<form method="POST">
<?php
include'db.php';
session_start();
$email_check = $_SESSION['username'];
$_email=$_SESSION['email'];
if(isset($_POST['sub']))
{
  $name1 = $_POST['queno'];
  $name2 = $_POST['que'];
  $name3 = $_POST['A'];
  $ename = $_POST['B'];
  $pname = $_POST['C'];
  $dname = $_POST['D'];
  $pcname = $_POST['corre'];
  
  if($name1=='')
  {
    echo"<script>alert('Please Enter Your First Name')</script>";
  }
  if($name2=='')
  {
    echo"<script>alert('Please Enter Your Father Name')</script>";
  }
  if($name3=='')
  {
    echo"<script>alert('Please Enter Your Mother Name')</script>";
  }
  
  if($ename=='')
  {
    echo"<script>alert('Please Enter Your Email')</script>";
  }
  if($pname=='')
  {
    echo"<script>alert('Please Enter Your Phone No')</script>";
  }
  
  if($dname=='')
  {
    echo"<script>alert('Please Enter Your DOB')</script>";
  }
  if($pcname=='')
  {
    echo"<script>alert('Please Enter Your Password ')</script>";
  }
   else
  {
    $query = "insert into admin_paper(qno,que,op1,op2,op3,op4,ans) values('$name1','$name2','$name3','$ename','$pname','$dname','$pcname')";
    if(!mysqli_query($conn,$query))
    {
      die(mysqli_error($conn));
    }
  }
 header('Location:admin_paper.php');
 exit;
}
else
{
echo "<font color='white' style='position:relative;top:0px;left:0px;size='18' face='Arial''><marquee><i class='fa fa-user' aria-hidden='true' style='font-size: 35px; color: #92C50D'></i> &nbsp &nbsp Question Entry By $email_check</marquee></font>";
}
?>
<fieldset>
<legend>Question Entry</legend>
<table width="50%" cellpadding="15" style="position: relative;left: 25%;">
	<tr>
		<td>Question No:</td>
		<td ><input type="text" name="queno" ></td>
	</tr>
	<tr>
		<td>Question:</td>
		<td><input type="text" name="que"></td>
	</tr>
	<tr>
		<td>option1</td>
		<td><input type="text" name="A"></td>
	</tr>
	<tr>
		<td>option2</td>
		<td><input type="text" name="B"></td>
	</tr>
	<tr>
		<td>option3</td>
		<td><input type="text" name="C"></td>
	</tr>
	<tr>
		<td>option4</td>
		<td><input type="text" name="D"></td>
	</tr>
	<tr>
		<td>Correct</td>
		<td><input type="text" name="corre"></td>
	</tr>
	<tr>
		<td colspan="2" ><input type="submit" name="sub"  value="SUBMIT" style="width :130px;height :50px;position: relative;left: 200px;background-color:lightgreen; font-size:20px;color:black;"></td>
	</tr>
</table>
</fieldset>	
</form>
</body>
</html>