<html>
<head>
<link rel="stylesheet" type="text/css" href="regis.css">
</head>
<body>
<div class="logo">
<img src="logo.png">
</div>
<div class="regis">
<h1> Register Here</h1>
<form action="#" method="post">
<p>Enter Your Name</p>
<input type="text" name="name" placeholder="enter your name" /> <br />
<p>Enter Your UserName</p>
<input type="text" name="uname" placeholder="enter your Username" /><br />
<p>Enter Your MailId</p>
<input type="text" name="mailid" placeholder="enter your Mailid" /><br />
<p>Password</p>
<input type="text" name="pass" placeholder="password" /><br />
<p>Confirm Password</p>
<input type="text" name="cpass" placeholder="cpass" /><br />
<p>Enter Your Aadhar's last four digit number for security</p>
<input type="password" name="security" placeholder="security" /><br />


<input type="submit" name="submit" value="Register">
</form>
</div>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
$name=$_POST['name'];
$uname=$_POST['uname'];
$mailid=$_POST['mailid'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$sec=$_POST['security'];
$con=mysql_connect("localhost","root","");
mysql_select_db("bshop",$con);
if($pass==$cpass)
{
$sql="insert into register values('$name','$uname','$mailid','$pass',$sec)";
$res=mysql_query($sql,$con);
if($res)
{
echo "<script>";
echo" alert('registered')";
echo "</script>";
header("Location:login.php");
}
}
else
{
echo "check your password!!";
}
}
?>