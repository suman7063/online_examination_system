<?php 
include'db.php';
echo $a;
if(isset($_POST['sub']))
{
  $name1=$_POST['name'];
  $name2=$_POST['f_name'];
  $name3=$_POST['m_name'];
  $adde=$_POST['add'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $DOB=$_POST['dob'];
  $gender=$_POST['gen'];
  $pass=$_POST['pass'];
    $query = "insert into res(name,fatname,mname,email,pass) values('$name1','$name2','$name3','$email','$pass1')";
    if(!mysqli_query($conn,$query))
    {
      die(mysqli_error($conn));
    }
    else
    {
    	echo"Successful";
    	header('location:view.php');
    }
}
    ?>
<!DOCTYPE html>
<html>
<head>
<title>res</title>
<link rel="stylesheet" type="text/css" href="css/res.css">
</head>
<body>
<div id="right">
	<form>
		<p>REGISTRATION &nbsp FORM</p>
		<hr>
		<table cellpadding="20">
			<tr>
				<td style="font-size: 20px;color: white;">NAME</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td style="font-size: 20px;color: white;">FATHER_NAME</td>
				<td><input type="text" name="f_name"></td>
			</tr>
			<tr>
				<td style="font-size: 20px;color: white;">MOTHER_NAME</td>
				<td><input type="text" name="m_name"></td>
			</tr>
			<tr>
				<td style="font-size: 20px;color: white;">ADDRESS</td>
				<td><input type="text" name="add"></td>
			</tr>
			<tr>
				<td style="font-size: 20px;color: white;">EMAIL</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td style="font-size: 20px;color: white;">PHONE</td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
			    <td style="font-size: 20px;color: white;">DOB</td>
				<td><input type="date" name="dob"></td>
			</tr>
			<tr>
				<td style="font-size: 20px;color: white;">GENDER</td>
				<td><select name="gen">
				<option name="FEMALE">FEMALE</option>
				<option name="MALE">MALE</option>
			</select></td>
			</tr>
			<tr>
				<td style="font-size: 20px;color: white;">PASSWORD</td>
				<td><input type="PASSWORD" name="pass"></td>
			</tr>
			<tr>
				<td style="font-size: 20px;color: white;" colspan="2" align="center"><input type="submit" name="sub" value="SUBMIT"></td>
			</tr>

		</table>
	</form>
</div>
</body>
</html>