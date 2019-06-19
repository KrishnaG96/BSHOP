<form method="post" action="#">
<p>Enter Your NewPass</p>
<input type="text" name="username">
<p>Confirm NewPass</p>
<input type="password" name="npass">
<input type="submit" name="submit">
</form>
<?php
$username=$_POST['username'];
$npass=$_POST['npass'];
$con=mysql_connect("localhost","root","");
mysql_select_db("bshop",$con);
$sql=" Update register set Password='$npass' where UserName='$username'";
$res=mysql_query($sql,$con);
if($res)
{
echo "updated";
}
?>