<?php
session_start();

if(!isset($_SESSION["id"])){

    header("location:index.php");
}

 ?>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"><link rel="stylesheet" href="./style1.css">


<a href="./redirection.php" class="logo" target="_self">
    <img src="./home.png" alt="">
</a>


  <div class="section-center">
      <h1 class="mb-0">error404 : page not found</h1>
  </div>
  
 