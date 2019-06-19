<?php
include("adminhead.php");
include("connection.php");
$sql="select Name,UserName,MailId from register ";
$res=mysql_query($sql,$con);
echo "<table border=1px;>";
echo "<tr>";
echo"<th>Name</th>";
echo"<th>UserName</th>";
echo"<th>MailId</th>";
echo"</tr>";
while($row=mysql_fetch_array($res))
{
echo "<tr>";
echo "<td> $row[0] </td>";
echo "<td> $row[1] </td>";
echo "<td> $row[2] </td>";
}
echo"</tr>";
echo "</table>";

?>