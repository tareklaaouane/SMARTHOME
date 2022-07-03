<?php
session_start();

if(!isset($_SESSION["id"])){

    header("location:index.php");
}


?>


<html>
<body>
<form action="light.php" method="post">
<input type="text" name="pin" placeholder="pin">
<input type="text" name="action" placeholder="ACTION">
<input type="submit" value="on/off">
</form>