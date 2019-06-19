<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<div class="login">
<div class="logo">
<img src="logo.png">
</div> <br>
<h1>Login</h1>
<form method="post" action="#">
<p>Username</p>
<input type="text" name="uname" placeholder="enter user name" /> <br>
<p>Password</p>
<input type="password" name="pass" placeholder="enter password" /> <br>
<input type="submit" name="submit" value="submit"> <br><br>

<a  href="register.php">dont have an account?</a><br><br>
<a  href="forget password.php">forgot password?</a>
</form>
</div>
</body>




<?php
session_start();
if(isset($_POST["submit"]))
{
$uname=$_POST['uname'];
$pass=$_POST['pass'];
if(empty($uname)||empty($pass))
{
echo "<script>";
echo" alert('enter username and password')";
echo "</script>";
}
else
{
$con=mysql_connect("localhost","root","");
mysql_select_db("bshop",$con);
$sql="select * from register where UserName='$uname'";
$res=mysql_query($sql,$con);
if($res)
{
while($row=mysql_fetch_assoc($res))
{
$_SESSION['username']=$row['UserName'];
$_SESSION['name']=$row['Name'];
$dbuser=$row['UserName'];
$dbpass=$row['Password'];
}
if($dbuser==$uname&&$dbpass==$pass)
{
header("Location:homepage.php");
}
else
{
echo "<script>";
echo" alert('not a registered user')";
echo "</script>";
}
}
}
}
?>