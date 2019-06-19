<html>
<head>
</head>
<body>
</body>
</html>
<?php
include("connection.php");
include("adminhead.php");
$sql= "select * from books";
$res=mysql_query($sql,$con);
$num=mysql_num_rows($res);
echo $num;
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
echo"<td>$row[0]</td>";
echo"<td>$row[1]</td>";
echo"<td>$row[2]</td>";
echo"<td>$row[3]</td>";
echo"<td>$row[4]</td>";
echo"<td>$row[5]</td>";
echo"<td>$row[6]</td>";
echo"<td><a href='bookdelete.php?bname=$row[0]&cate=$row[1]&isbn=$row[2]&desc=$row[3]&price=$row[4]&author=$row[5]&edition=$row[6]'>Delete </td>";
echo"</tr>";
}
echo"</table>";
?>