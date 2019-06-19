<?php include("adminhead.php");?>
<form method="post" action="#">
<p> Enter BookName</p>
<input type="text" name="bname" value="<?php echo $_REQUEST['bname'] ?>"><br>
<p> Enter Category</p>
<input type="text" name="category" value="<?php echo $_REQUEST['cate'] ?>"><br>
<p> Enter ISBN</p>
<input type="text" name="isbn" value="<?php echo $_REQUEST['isbn'] ?>"><br>
<p> Enter Description</p>
<input type="text" name="desp" value="<?php echo $_REQUEST['desc'] ?>"><br>
<p> Enter Price</p>
<input type="text" name="price"value="<?php echo $_REQUEST['price'] ?>"><br>
<p> Enter Author</p>
<input type="text" name="author"value="<?php echo $_REQUEST['author'] ?>"><br>
<p> Enter Edition</p>
<input type="text" name="edition"value="<?php echo $_REQUEST['edition'] ?>"> <br>
<input type="submit" name="submit">
</form>

<?php
include("connection.php");

$bname=$_REQUEST['bname'];
$cate=$_REQUEST['cate'];
$isbn=$_REQUEST['isbn'];
$desc=$_REQUEST['desc'];
$price=$_REQUEST['price'];
$author=$_REQUEST['author'];
$edition=$_REQUEST['edition'];
$sql="Update books set BookName='$bname',Category='$cate',Description='$desc',Price=$price,Author='$author',Edition='$edition' where Isbn=$isbn";
$res=mysql_query($sql,$con);
if($res)
{
echo"Updated";
}
?>
