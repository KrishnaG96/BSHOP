<html>
<head>
<link rel="stylesheet" type="text/css" href="adminhome.css">
</head>
<?php
include("adminsess.php");
include("adminhead.php");

?>
<center>
<div class="addbk">
<form method="post" action="#">
<p> Enter BookName</p>
<input type="text" name="bname"><br>
<p> Enter Category</p>
<input type="text" name="category"><br>
<p> Enter ISBN</p>
<input type="text" name="isbn"><br>
<p> Enter Description</p>
<input type="text" name="desp"><br>
<p> Enter Price</p>
<input type="text" name="price"><br>
<p> Enter Author</p>
<input type="text" name="author"><br>
<p> Enter Edition</p>
<input type="text" name="edition"> <br>
<input type="submit" name="submit">

</form>
</div>
</center>
<?php
if(isset($_POST["submit"]))
{
$bname=$_POST['bname'];
$category=$_POST['category'];
$isbn=$_POST['isbn'];
$desp=$_POST['desp'];
$price=$_POST['price'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$con=mysql_connect("localhost","root","");
mysql_select_db("bshop",$con);
$sql="insert into books(BookName,Category,Isbn,Description,Price,Author,Edition) values('$bname','$category',$isbn,'$desp',$price,'$author','$edition')";
$res=mysql_query($sql,$con);
echo $sql;
if($res)
{
echo "Books Inserted";
}
}
?>