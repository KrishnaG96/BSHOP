 <html>
<head>
<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<?php include("session.php"); ?>
<div class="menu">
<div class="image">
<img src="logo.png">
</div>
<ul>
<li class="active"> <a href="homepage.php"> Home</a></li>
<li><a href="categories.php">Categories</a>
<li><a href="#">Myorders</a></li>
<li><a href="updatepass.php">Update Password</a></li>
<li><a href="feedback.php">Feedback</a></li>
<li><a href="viewcart.php">Cart</a></li>
<li ><a href="logout.php">Logout</a> </li>
</ul>
</div>
<div class="left">
<?php

session_start();
include("connection.php");
$ses=$_SESSION['name'];
echo " Welcome  $ses <br>";
$sql="select * from books";
$res=mysql_query($sql,$con);
while($row=mysql_fetch_array($res))
{
echo"<form method ='post' action='insertcart.php'>";
echo"<input type='hidden' name='bname' value='$row[0]'>";
echo"<input type='hidden' name='cate' value='$row[1]'>";
echo"<input type='hidden' name='isbn' value='$row[2]'>";
echo"<input type='hidden' name='cate' value='$row[3]'>";
echo"<input type='hidden' name='price' value='$row[4]'>";
echo"<input type='hidden' name='author' value='$row[5]'>";
echo"<input type='hidden' name='edition' value='$row[6]'>";
$bname=$row[0];
$price=$row[4];


echo"<div class='allbooks'>";
echo"<p>";
echo"BookName: $bname <br>" ;
echo"Price: .$price";
echo"<input type='submit' name='submit' value='cart'>";
echo"</form>";
echo"</p>";
echo"</div>";
}
echo "<div class='new'>";

echo"</div>";

?>
</div>
<div class="footer">
</div>
</body>
</html>