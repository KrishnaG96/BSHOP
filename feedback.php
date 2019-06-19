<html>
<head>
<link rel="stylesheet" type="text/css" href="fb.css">
</head>
<body>
<?php include("head.php");
include("session.php");
?>
<div class="fback">
<form method="post" action="#">
<p>UserName</p>
<input type="text" name="username" value='<?php session_start(); echo $_SESSION[username]?>' />
<p>Mailid </p>
<input type="text" name="mailid"  /> <br />
<p>Comment</p>
<textarea name="comment" rows="4" cols="20">
</textarea> <br>
<input type="submit" name="submit" value="submit">
</form>
</div>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST["submit"]))
{
$username=$_POST['username'];
$mailid=$_POST['mailid'];
$comment=$_POST['comment'];
$sql="insert into feedback values('$username','$mailid','$comment')";
$res=mysql_query($sql,$con);
if($res)
{
echo "<script>";
echo" alert('Thanks for Your valuable feedback..!')";
echo "</script>";
}
}
?>
