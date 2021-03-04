<?php
session_start();
$_SESSION["username"] = "Guest";
header("location: index.php");
?>