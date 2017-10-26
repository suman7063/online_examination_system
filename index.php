<?php 
include'db.php';
session_start();
if(isset($_POST['submit']))
{ 
  $ename=$_POST['user'];
  $pass1=$_POST['pass'];
  if($ename=='')
  {
    echo"<script>alert('Please Enter Your Email Name')</script>";
  }
  if($pass1=='')
  {
    echo"<script>alert('Please Enter Your Password Name')</script>";
  }

  $sql = "SELECT * FROM login WHERE email = '$ename' and pass = '$pass1'";
  $record = mysqli_query($conn,$sql);
  $rowcount= mysqli_num_rows($record);
  if($rowcount==1)
  {
    $row=mysqli_fetch_array($record);
    $type=$row['user_type'];
    if($type=="admin")
    {
      $_SESSION['username']="admin";
      $_SESSION['email']=$ename;
      
      header("Location:admin.php");
    }
    else
    {
      $_SESSION['email']=$ename;
         
        header("Location:exam_paper.php");
    }
  }
  else
  {
    echo'Invalide';
  }
     
}
 ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/upper.css">
</head>
<body>
<div style="width: 100%;height: 100%;">
<div id="upper">
</div> 
<div id="upper_right">
</div>
<div id="left">
<div class="resi1">
<p>REGISTRATION</p>
</div>	
<div class="resi"><p><marquee scrollamount="10" direction="left" scrolldelay="10" ONMOUSEOVER="this.stop();" ONMOUSEOUT="this.start();">NEW &nbsp USER &nbsp<a href="regis.php">CLICK</a>&nbsp HERE</marquee></p></div>
</div>
<div id="right">
<div id="log">
<div id="log2"><p>LOGIN</p></div>
<form id="form" method="POST">
<input type="text" name="user" placeholder="USER NAME" style="width:90%;height: 20%;position: relative;top: 10%;left: 5%;">
<br>
<input type="Password" name="pass" placeholder="PASSWORD" style="width: 90%;height:20%;position: relative;top: 30%;left: 5%;">
<br>
<input type="submit" name="submit" value="SUBMIT" style="width: 30%;height: 15%;position: relative;top: 50%; left: 35%;font-size: 20px;">
</form>
</div>
</div>
<div id="bottom">	
</div>
</div>
</body>
</html>