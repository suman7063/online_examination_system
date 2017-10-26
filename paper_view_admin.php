<?php
include'db.php';
$email_check = $_SESSION['username'];
$_check=$_SESSION['email'];
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
<form>
<?php
$pro_select = "select * from admin_paper";
$result = mysqli_query($conn,$pro_select) ;
$rowcount= mysqli_num_rows($result);
if($rowcount>=1) 
{
while($row = mysqli_fetch_array($result)) 
 {?>
    <table>
        <tr>
        <td style="font-size: 20px; color:#4D38A4 ;"><?php echo $row['qno']?>)&nbsp &nbsp<?php echo $row['que']?></td>   </tr>
        <tr>
        <td style="font-size: 15px; color:black;">(A)<input type="radio" name="opt1" value="A">&nbsp &nbsp<?php echo $row['op1']?></td>   
        </tr>
        <tr>
        <td style="font-size: 15px; color: black;">(B)<input type="radio" name="opt1" value="B">&nbsp &nbsp<?php echo $row['op2']?></td>   
        </tr>
        <tr>
        <td style="font-size: 15px; color: black;">(C)<input type="radio" name="opt1" value="C">&nbsp &nbsp<?php echo $row['op3']?></td>   
        </tr>
        <tr>
        <td style="font-size: 15px; color: black;">(D)<input type="radio" name="opt1" value="D">&nbsp &nbsp<?php echo $row['op4']?></td>   
        </tr>
        <br>
        <?php
} 
}
 ?>
        <tr>
        </fieldset>
        <td style="position:absolute;left:50%; top:1650px;"><input type="submit" name="sub" value="SUBMIT" style="font-size:25px; color: black;background-color:#E87384  ;"></td>   
        </tr>
    </table>
</form>
</div>
</body>
</html>