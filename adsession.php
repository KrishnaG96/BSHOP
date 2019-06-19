<?php
session_start();
$_SESSION['admin']="";
$_SESSION['name']="";
session_destroy();
header('Location:login.php?msg ='."Logout successfully..!!");
?>