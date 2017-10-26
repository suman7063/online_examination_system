
<?php 
        
if(isset($_POST['signin']))
{
	
	 if (isset($_POST['ch']))
	{
    setcookie("uname",$_POST['id'],time()+60*60);
    setcookie("upass",$_POST['pass'],time()+60*60);
	}
	if(!isset($_COOKIE['uname']))
	{
		echo"hi";
	}	
	else 
	{
	header('location:https://www.phptpoint.com');
    }
			
}
				
		

	 
  
?><html>
 
<form method="post">
 
<table align="center"> 
	
<tr>
		
<td colspan="2" align="center"><?php echo @$err;?></td>
	
</tr>
	
	
<tr>
		
<th>Your email</th>
		
<td><input type="email" name="id" placeholder="sanjeev@gmail.com"  value="<?php echo @$_COOKIE['uname'];?>" required/></td>
	
</tr>
	
<tr>
		
<th>Your password</th>
		
<td><input type="password" placeholder="123" name="pass" value="<?php echo @$_COOKIE['upass'];?>" required/></td>
	
</tr>
	
<tr>
		
<th>stay signed in</th>
		
<td><input type="checkbox" name="ch"/></td>
	
</tr>
	
<tr>
	
<td colspan="2" align="center">
		
<input type="submit" name="signin" value="SignIn"/></td>
	
</tr>
 
</table>
	
</body>
 
</form>
 
</html>