<form method="post" action="#">
<p>Username</p>
<input type="text" readonly name="uname" value="<?php session_start(); echo $_SESSION[username];?>"  />
<p>BookName</p>
<input type="text" name="bname" readonly value="<?php echo $_REQUEST['bname'] ?>"><br>
<p>Category</p>
<input type="text" name="cate" readonly value="<?php echo $_REQUEST['cate'] ?>"><br>
<p>Isbn</p>
<input type="text" name="isbn" readonly value="<?php echo $_REQUEST['isbn'] ?>"><br>
<p>Price</p>
<input type="text" name="price" readonly value="<?php echo $_REQUEST['price'] ?>"><br>
<p>Author</p>
<input type="text" name="author" readonly value="<?php echo $_REQUEST['author'] ?>"><br>
<p>Edition</p>
<input type="text" name="edition" readonly value="<?php echo $_REQUEST['edition'] ?>"><br>
<p>Quantity</p>
<input type="text" name="quantity" />
<p>Address</p>
<textarea name="address">
</textarea>
<input type="submit" name="submit" value="submit" >

</form>
<?php
session_start();
include("connection.php");
$uname=$_SESSION[username];
$bname=$_REQUEST['bname'];
$isbn=$_REQUEST['isbn'];
$cate=$_REQUEST['cate'];
$price=$_REQUEST['price'];
$author=$_REQUEST['author'];
$edition=$_REQUEST['edition'];
$quan=$_POST['quantity'];
$address=$_POST['address'];
$tot=$quan*$price;
$status="null";
$sql="insert into Purchase values('$uname','$bname',$isbn,$price,'$author','$edition','$cate',$quan,'$address',$tot,'$status')";
$res=mysql_query($sql,$con);
if($res>0)
{
echo "Thanks for shopping";
}
?>