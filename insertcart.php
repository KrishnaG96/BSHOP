<html>
<head>
</head>
<body>



</body>
</html>
<?php
session_start();
include("connection.php");
$uname=$_SESSION['username'];
$bname=$_REQUEST[bname];
$cate=$_REQUEST[cate];
$isbn=$_REQUEST[isbn];
$price=$_REQUEST[price];
$author=$_REQUEST[author];
$edition=$_REQUEST[edition];
$check="select * from cart where Isbn= $isbn and UserName= '$uname'";
$res1=mysql_query($check,$con);
while($db=mysql_fetch_assoc($res1))
{
$isb=$db['Isbn'];
}
if($isbn==$isb)
{
header("Location:homepage.php");
echo "<script>";
echo "window.alert('as')";
echo "</script>";

}
else
{
$sql="insert into cart values('$uname','$bname','$cate',$isbn,$price,'$author','$edition')";
$res=mysql_query($sql,$con);
if($res)
{
header("Location:homepage.php");
}
}
//$products=array($bname,$cate,$isbn,$price,$author,$edition);

?>