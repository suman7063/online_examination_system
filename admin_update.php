<?php
include'db.php';
session_start();
$email_check = $_SESSION['username'];
if(isset($_POST['update']))
{
$search_name=$_POST['queno'];
$qt=$_POST['que'];
$opt1=$_POST['A'];
$opt2=$_POST['B'];
$opt3=$_POST['C'];
$opt4=$_POST['D'];
$corr=$_POST['answer'];
$up_qr="update admin_paper set que=$qt,op1=$opt1,op2=$opt2,op3=$opt3,op4=$opt4,ans =$corr where qno='$search_name'";
$res = mysqli_query($conn,$up_qr);
$pro_select = "select * from admin_paper where (qno='$search_name')";
$result = mysqli_query($conn,$pro_select);
$rowcount= mysqli_num_rows($result);
if($rowcount>=1)
{
 while($row = mysqli_fetch_array($result)) 
 {
 $qut=$row['que'];
 }
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
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
<form method="POST">
<fieldset>
<legend>Question Update</legend>
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
		<td><input type="text" name="answer"></td>
	</tr>
	<tr>
		<td colspan="2" ><input type="submit" name="update"  value="UPDATE" style="width :130px;height :50px;position: relative;left: 200px;background-color:lightgreen; font-size:20px;color:black;"></td>
	</tr>
</table>
</fieldset>	
</form>
</body>
</html>