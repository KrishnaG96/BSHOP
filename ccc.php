if(isset($_POST['sub']))
{
if($security==$_POST['mark'])
{
echo "<p> Enter New Password</p>";
echo"<input type='text' name='newpass'>";
echo"<input type='text' name='cnpass'>";
echo"<input type='submit' name='submit'>";
echo"</form>";
if($_POST['newpass']==$_POST['cnpass'])
{
$sql="Update register set Password='$_POST[newpass]'";
$res=mysql_query($sql,$con);
if($res)
echo "updated successfully";
}
}
   }
   }
}
else
{
echo "Your are not a registered user";
}
}