<html>

<head>
<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<form method="post" action="#">
<?php include("head.php"); 
?>
<div class="cate">
<p>select by category</p>
<select name="categ">
<option value="" disabled selected="selected">select</option>
<option value="Education">Education</option>
<option value="Novel">Novel</option>
<option value="Divine"></option>
<option value="Religious"></option>
<option value="Politics"></option>
<option value="Entertainment"></option>
</select>
<p>filter price</p>
<select name="price">
<option value=" " disabled selected="selected">select</option>
<option value=100>100</option>
<option value=200>200</option>
<option value=500>500</option>
<option value="1000">1000</option>
</select>
<input type="submit" name="submit" value="submit" />

</div>
</form>
</body>
<?php
include("session.php");

if(isset($_POST['submit']))
{
$cat=$_POST['categ'];
$price=$_POST['price'];
echo "$price";
$con=mysql_connect("localhost","root","");
mysql_select_db("bshop",$con);
$sql="select * from books where Category ='$cat' or Price <='$price' ";
echo $sql;
$res=mysql_query($sql,$con);
echo"<form method='post' action='buy.php'>";
echo "<table border=2px>";
echo"<tr>";
echo"<th>BookName</th>";
echo"<th>Category</th>";
echo"<th>Isbn</th>";
echo"<th>Description</th>";
echo"<th>Price</th>";
echo"<th>Author</th>";
echo"<th>Edition</th>";
echo"</tr>";
while($row=mysql_fetch_array($res))
{
echo"<tr>";
echo"<td> <input type='text' readonly name='bname' value='$row[0]'</td>";
echo"<td> <input type='text' readonly name='cate' value='$row[1]'</td>";
echo"<td> <input type='text' readonly name='isbn' value='$row[2]'</td>";
echo"<td> <input type='text' readonly name='desc' value='$row[3]'</td>";
echo"<td> <input type='text' readonly name='price' value='$row[4]'</td>";
echo"<td> <input type='text' readonly name='author' value='$row[5]'</td>";
echo"<td> <input type='text' readonly name='edition' value='$row[6]'</td>";
echo"<td> <input type='submit' name='submit' value='BuyNow' </td>";
echo"</tr>";
}
echo"</table>";
echo"</form>";
}
?>
</html>
