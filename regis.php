<!DOCTYPE html>
<html>
<head>
<title>res</title>
<style type="text/css">
   body
    {
      background-image: url('Colourful Glass Art Wallpapers (1).jpg');
      background-size: 100% 1500px; 
      background-repeat: no-repeat;
    opacity:0.9;

    }
	input[type="text"]:hover
	{
		background-color:lightgreen;
	}
  input[type="email"]:hover
  {
    background-color:lightgreen;
  }
  input[type="password"]:hover
  {
    background-color:lightgreen;
  }
  input[type="date"]:hover
  {
    background-color:lightgreen;
  }
  fieldset
  {    
     width: 80%;
     height: 70%;
     position: relative;
     left: 10%;
  }
  legend
  {
    font-size:30px;
    color: white;
  }
 ::-webkit-input-placeholder 
 { /* Chrome/Opera/Safari */
  color:black;
  font-size:15px;
}

</style>
</head>
<body>
<p align="center" style="font-size:30px;position:relative;top:0px;color:white;">REGISTRATION &nbsp FORM &nbsp<div style="background-color: white;width: 100px;height: 30px; position:absolute;right:100px;top: 20px;"><a href="index.php" style=" font-size: 20px; color: black;text-align: center;position: relative;left: 20px;">Login</a></div></p>
	<form method="POST">
  <?php
include'db.php';
if(isset($_POST['sub']))
{
  $name1 = $_POST['name'];
  $name2 = $_POST['f_name'];
  $name3 = $_POST['m_name'];
  $ename = $_POST['email'];
  $pname = $_POST['phone'];
  $dname = $_POST['dob'];
  $pcname = $_POST['pass'];
  $cpcname = $_POST['pass2'];

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
  elseif ($pcname!=$cpcname) 
  {
    echo"<script>alert('Please Enter same Password')</script>";
  }
   else
  {
    $query = "insert into reg(name,fname,mname,email,phone,dob,pass) values('$name1','$name2','$name3','$ename','$pname','$dname','$pcname')";
    if(!mysqli_query($conn,$query))
    {
      die(mysqli_error($conn));
    }
    else
    {
     $usertype="Candidate";
     $sql="insert into login(email,pass,user_type) values('$ename','$pcname','$usertype')";
     if(!mysqli_query($conn,$sql))
    {  
      die(mysqli_error($conn));
    }
    }
  }
 setcookie($ename,time()+60*60);
 header('Location:regis.php');
 exit;
}
?>
	<fieldset>
    <legend>Registration Details:</legend>
		
		<table cellpadding="20" align="center">
			<tr>
			<td><input type="text" name="name" placeholder="STUDENT_NAME" size="80" style="height:40px;"></td>
			</tr>
			<tr>
				<td><input type="text" name="f_name" placeholder="FATHER_NAME" size="80" style="height:40px;"></td>
			</tr>
			<tr>
				<td><input type="text" name="m_name" placeholder="MOTHER_NAME" size="80" style="height:40px;"></td>
			</tr>
			<tr>
				<td><input type="email" name="email" placeholder="EMAIL" size="80" style="height:40px;"></td>
			</tr>
			<tr>
				<td><input type="text" name="phone" placeholder="PHONE" size="80" style="height:40px;"></td>
			</tr>
			<tr>
				<td><input type="date" name="dob" placeholder="DOB" style="height:40px; width: 590px;"></td>
			</tr>
			<tr>
				<td><input type="PASSWORD" name="pass" placeholder="PASSWORD" size="80" style="height:40px;"></td>
			</tr>
			<tr>
				<td><input type="PASSWORD" name="pass2" placeholder="CONFORM_PASSWORD" size="80" style="height:40px;"></td>
			</tr>
			<tr>
				<td style="font-size: 20px;color: white;" colspan="2" align="center"><input type="submit" name="sub" value="SUBMIT" style="width :130px;height :50px;position: relative;left:20px;background-color:lightgreen; font-size: 20px;color:black;"></td>
			</tr>

		</table>
		</fieldset>
	</form>
</div>
</body>
</html>