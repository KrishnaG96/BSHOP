<?php
include("head.php");
session_start();
include("connection.php");
$sql="select * from  cart where UserName='$_SESSION[username]'";
$res1=mysql_query($sql,$con);
$res=mysql_query($sql,$con);
$num=mysql_num_rows($res);
echo $num;
while($check=mysql_fetch_array($res1))
{
$uname=$check[0];
}
if(!$uname)
{
echo"No items in your cart";
}
else
{
echo "<table border=1px>";
echo"<tr>";
echo"<th>BookName</th>";
echo"<th>Category</th>";
echo"<th>Isbn</th>";
echo"<th>Price</th>";
echo"<th>Author</th>";
echo"<th>Edition</th>";
echo"<th>remove</th>";
while($row=mysql_fetch_array($res))
{
echo"<form method='post' action='cartdelete.php'>";
echo "<tr>";
echo"<input type='hidden' name='bnamex' value='$row[1]'>";
echo"<input type='hidden' name='cate' value='$row[2]'>";
echo"<input type='hidden' name='isbn' value='$row[3]'>";
echo"<input type='hidden' name='price' value='$row[4]'>";
echo"<input type='hidden' name='author' value='$row[5]'>";
echo"<input type='hidden' name='edition' value='$row[6]'>";
echo"<td> $row[1]</td>";
echo"<td> $row[2]</td>";
echo"<td> $row[3]</td>";
echo"<td> $row[4]</td>";
echo"<td> $row[5]</td>";
echo"<td> $row[6]</td>";
echo"<td> <input type='submit' name='submit' value='delete'></td>";
echo"<td><a href ='purchase.php?bname=$row[1]&cate=$row[2]&isbn=$row[3]&price=$row[4]&author=$row[5]&edition=$row[6]'>purchase </td>";
echo "</form>";
echo"</tr>";
}
$bname=$_REQUEST['bnamex'];
echo $bname;
echo"</table>";
}

?>