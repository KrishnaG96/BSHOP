<?php
session_start();
$_SESSION['username']="";
$_SESSION['name']="";
session_destroy();
header('Location:login.php?msg ='."Logout successfully..!!");
?>