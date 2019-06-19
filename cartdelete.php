<html>
<head>
</head>
<body>
</body>
</html>
<?php
session_start();
include("connection.php");
$bname=$_REQUEST[bnamex];
$cate=$_REQUEST[cate];
$isbn=$_REQUEST[isbn];
$price=$_REQUEST[price];
$author=$_REQUEST[author];
$edition=$_REQUEST[edition];
$sql="delete from cart where username='$_SESSION[username]' and BookName='$bname' and Category='$cate' and Isbn='$isbn' and Price=$price and Author='$author' and Edition='$edition'";
echo $sql;
$res=mysql_query($sql,$con);
if($res)
{
header("Location:viewcart.php");
}

?>