<?php
session_start();
//print $kk=$_SESSION['user'];
if(empty($_SESSION['user'])){exit(header("location:../logout.php"));} 
?>

