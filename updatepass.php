<html>
<head>
<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<?php include("head.php");
include("session.php"); 
?>
<div class="upass">
<form method="post" action="#">

<p>UserName</p>
<input type="text" readonly name="username" value="<?php session_start(); echo $_SESSION['username']?>" />
<p>Enter NewPassword</p>
<input type="password" name="npass" />
<p>Enter Confirm Password</p>
<input type="password" name="cpass" /><br>
<input type="submit" name="submit" value="Enter" />
</form>
</div>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
include("connection.php");
$username=$_POST['username'];
$npass=$_POST['npass'];
$cpass=$_POST['cpass'];
$sql=" Update register set Password ='$npass' where UserName='$username'";
$res=mysql_query($sql,$con);
if($res)
{
echo "<center><h2 style='color:red;'>Password Updated Successfully</h2></center>";
}
}
?>

