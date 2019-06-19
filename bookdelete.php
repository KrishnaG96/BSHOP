<?php
include("connection.php");
$bname=$_REQUEST['bname'];
$cate=$_REQUEST['cate'];
$isbn=$_REQUEST['isbn'];
$desc=$_REQUEST['desc'];
$price=$_REQUEST['price'];
$author=$_REQUEST['author'];
$edition=$_REQUEST['edition'];
$sql="delete  from books where Isbn = $isbn ";
$res=mysql_query($sql,$con);
echo $sql;
if($res)
{
header("Location:addeletebook.php");
}
?>
