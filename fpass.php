<html>
<head>
</head>
<form method="post" action="#">
<?php 
session_start();
 echo"hai     " . $_SESSION['orig'];
?>
<p>Enter Your NewPassword</p>
<input type="password" name="npass" />
<p>Confirm NewPassword</p>
<input type="password" name="cpass" /> <br />
<input type="submit" name="submit" value="Enter" />
</html>
<?php
if(isset($_POST['submit']))
{
include("connection.php");
$npass=$_POST['npass'];
$cpass=$_POST['cpass'];
if($npass==$cpass)
{
$sql=" Update register set Password ='$npass' where UserName='$_SESSION[name]'";
echo $sql;
$res=mysql_query($sql,$con);
if($res)
{
header("Location:login.php");
}
}
}
?>