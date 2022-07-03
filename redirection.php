<?php
session_start();

if(!isset($_SESSION["id"])){

    header("location:index.php");
}

if(($_SESSION["type"])!="user")     header("location:admin.php");
else header("location:user.php"); 

 ?>