<html>
<head>
</head>
<body>



</body>


</html>
<?php
include("head.php");
include("session.php");
$bname=$_REQUEST['bname'];
$isbn=$_REQUEST['isbn'];
$price=$_REQUEST['price'];
$cate=$_REQUEST['cate'];
$author=$_REQUEST['author'];
$edition=$_REQUEST['edition'];
?>
<div>
<form method="post" action="#">
<pre>
<p>UserName</p>
<input type="text" name="uname" value="<?php session_start(); echo $_SESSION[username] ?>">
<p>BookName</p>
<input type="text" readonly name="bnamex" value="<?php  echo $bname?>"><br>
<p>ISBN</p>
<input type="text" readonly name="isbnx" value="<?php  echo $isbn?>"><br>
<p>PRICE</p>
<input type="text" readonly name="pricex" value="<?php  echo $price?>"><br>
<p>AUTHOR</p>
<input type="text" readonly name="authorx" value="<?php  echo $author?>"><br>
<p>CATEGORY</p>
<input type="text" name="cate" value="<?php echo $cate ?>"> <br>
<p>EDITION</p>
<input type="text" readonly name="editionx" value="<?php  echo $edition?>"><br>
<p>QUANTITY</p>
<input type="text" name="quantity">
<p>ADDRESS</p>
<input type="text" name="address">
<input type="submit" name="submit" value="Place Order">
</pre>
</form>
<?php
include("connection.php");
include("session.php");
$uname=$_POST['uname'];
$bname=$_REQUEST['bnamex'];
$isbn=$_REQUEST['isbnx'];
$price=$_REQUEST['pricex'];
$author=$_REQUEST['authorx'];
$edition=$_REQUEST['editionx'];
$cate=$_REQUEST['cate'];
$quantity=$_REQUEST['quantity'];
$address=$_REQUEST['address'];
$tot=$price*$quantity;
$sql="insert into Purchase values('$uname','$bname',$isbn,$price,'$author','$edition','$cate',$quantity,'$address',$tot)";
$res=mysql_query($sql,$con);
if($res>0)
{
echo "<script>";
echo "window.alert('Your order has been placed successfully..! you can track your order in myorder section')";
echo "</script>";
}
?>