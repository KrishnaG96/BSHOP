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
if($uname==admin&&$pass==admin)
{
$_SESSION['admin']=$uname;
header("Location:adminhome.php");
}
}
}
?>