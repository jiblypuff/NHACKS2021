<?php
session_start(); 
$_SESSION['role']=$_GET['role'];
header("Location: item-details.php");
?>