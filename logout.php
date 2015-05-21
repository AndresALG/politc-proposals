<?php
session_start();
$_SESSION["logged"] = false;
$_SESSION["user"] = null;
header("Location:homepage.php");
ma
?>
