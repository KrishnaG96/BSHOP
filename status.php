<form method="post" action="#">
<p>Username</p>
<input type="text" readonly name="uname" value="<?php echo $_REQUEST['uname'];?>"  />
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
<input type="text" name="quan" readonly value="<?php echo $_REQUEST['quan'] ?>" />
 <select name='status'> 
<option value='delivered'> delivered </option>
<option value='cancelled'> cancelled </option>
<option value='dispatched'> dispatched </option>
</select> 
<input type="submit" name="submit" value="submit" >
</form>


<?php

include("connection.php");
$uname=$_REQUEST['uname'];
$status=$_POST['status'];
echo $status;
$isbn=$_REQUEST['isbn'];
$sql="Update Purchase set Status='$status' where UserName='$uname' and Isbn=$isbn";
$res=mysql_query($sql,$con);
echo $sql;
if($res)
{
echo "hai";
}
?>