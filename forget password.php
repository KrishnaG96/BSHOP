<html>
<head>
<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<div class="forpass">
<form method="post" action="#">
<p>Enter Your Username</p>
<input type="text" name="username">
<p>Enter aadhars last 4 digit number</p>
<input type="password" name="aadhar"> <br>
<input type="submit" name="submit" value="enter">
</form>
</div>

<?php
if(isset($_POST['submit']))
{
include("connection.php");
$user=$_POST['username'];
$aadhar=$_POST['aadhar'];
$sql="select * from register where UserName='$user' and Security=$aadhar";
$res=mysql_query($sql,$con);
while($row=mysql_fetch_assoc($res))
{
session_start();
$_SESSION['orig']=$row['Name'];
$_SESSION['name']=$row['UserName'];
$dbuser=$row['UserName'];
$dbsec=$row['Security'];
}
if($dbuser==$user&&$dbsec==$aadhar)
{
header("Location:fpass.php");
}
else
{
echo "Check the entered details or Your Not a Registered User";
}
}
?>
</body>
</html>