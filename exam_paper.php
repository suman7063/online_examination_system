<?php
session_start();
$email_check = $_SESSION['email'];
$qu = mysqli_query($conn,"select name as name1 from reg where email = '$email_check'");
?>
<!DOCTYPE html>
<html>
<head>
    <title>view</title>
    <link rel="stylesheet" type="text/css" href="css/paper_view_admin.css">
</head>
<body>
<div id="first"></div>
<div id="second"></div>
<div id="third">
<div id ="log"><a href="logout.php" style="font-size:20px;
     position: absolute;top:15px;left:15px;text-decoration: none; color: black;">LOGOUT</a></div>
<?php
include'db.php';
$qs_no=new splFixedArray(30);
$array=new splFixedArray(30);
$ans_ans=new splFixedArray(30);
$i=0;
$j=0;
$q=0;
if(isset($_POST['sub']))
{
    $i=1;
    $qno1=0;
    $pro_select = "select qno from answer";
    $result = mysqli_query($conn,$pro_select) ;
    while($row = mysqli_fetch_array($result)) 
    {
    $qno1=$row['qno'];
    $sql1="update answer set stan='$_POST[$i]' where qno='$qno1'";
    mysqli_query($conn,$sql1);
    $i++;
    }
    header("location:resul.php");
}
else
{
  $sql2="delete from answer" ;
  mysqli_query($conn,$sql2);
  $sql="select distinct * from admin_paper order by UUID()";
  $record=mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($record))
  {
    $q++;
    $qno=$row['qno'];
    $ans=$row['ans'];
    $rquestion=$row['que'];
    $op1=$row['op1'];
    $op2=$row['op2'];
    $op3=$row['op3'];
    $op4=$row['op4'];
    $sql="insert into answer(qno,question,op1,op2,op3,op4,truans,stan,marks)values('$qno','$rquestion','$op1','$op2','$op3','$op4','$ans','0','0')";
    if(!mysqli_query($conn,$sql))
    {
        echo'Insertion Failed'.mysql_error();
    }
?>
    <form method="POST">
    <table>
        <tr>
        <td style="font-size: 20px; color:#4D38A4 ;"><?php echo $q?>)&nbsp &nbsp<?php echo $row['que']?></td>   </tr>
        <tr>
        <td style="font-size: 15px; color:black;">(A)<input type="radio" name="<?php echo $qno?>" value="A">&nbsp &nbsp<?php echo $row['op1']?></td>   
        </tr>
        <tr>
        <td style="font-size: 15px; color: black;">(B)<input type="radio" name="<?php echo $qno?>" value="B">&nbsp &nbsp<?php echo $row['op2']?></td>   
        </tr>
        <tr>
        <td style="font-size: 15px; color: black;">(C)<input type="radio" name="<?php echo $qno?>" value="C">&nbsp &nbsp<?php echo $row['op3']?></td>   
        </tr>
        <tr>
        <td style="font-size: 15px; color: black;">(D)<input type="radio" name="<?php echo $qno?>" value="D">&nbsp &nbsp<?php echo $row['op4']?></td>   
        </tr>
        <br>
        <?php
        $qs_no[$i]=$qno;
        $i++;
        $ans_ans[$j]=$ans;
        $j++;
} 
}
 ?>
        <tr>
        <td style="position:absolute;left:50%; top:1650px;"><input type="submit" name="sub" value="SUBMIT" style="font-size:25px; color: black;background-color:#E87384  ;"></td> </tr>
    </table>
</fieldset>
</form>
</div>
</body>
</html>