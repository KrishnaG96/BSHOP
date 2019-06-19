<?php
include("adminhead.php");
include("connection.php");
$sql="select * from Purchase";
$res=mysql_query($sql,$con);
echo "<table border=1px;>";
echo "<tr>";
echo"<th>UserName</th>";
echo"<th>BookName</th>";
echo"<th>Isbn</th>";
echo"<th>Price</th>";
echo"<th>Author</th>";
echo"<th>Edition</th>";
echo"<th>Category</th>";
echo"<th>Quantity</th>";
echo"<th>Address</th>";
echo"<th>Total</th>";
echo"<th>Status</th>";
echo"</tr>";
while($row=mysql_fetch_array($res))
{
echo "<tr>";
echo "<td> $row[0] </td>";
echo "<td> $row[1] </td>";
echo "<td> $row[2] </td>";
echo "<td> $row[3] </td>";
echo "<td> $row[4] </td>";
echo "<td> $row[5] </td>";
echo "<td> $row[6] </td>";
echo "<td> $row[7] </td>";
echo "<td> $row[8] </td>";
echo "<td> $row[9] </td>";
echo " <td> <select name='status'> 
<option value='delivered'> delivered </option>
<option value='cancelled'> cancelled </option>
<option value='dispatched'> dispatched </option>
</select> </td>";
echo "<td> <a href='status.php?uname=$row[0]&bname=$row[1]&isbn=$row[2]&price=$row[3]&author=$row[4]&edition=$row[5]&cate=$row[6]&quan=$row[7]&add=$row[8]&tot=$row[9]'>hk</td>";

}
echo"</tr>";
echo "</table>";
?>