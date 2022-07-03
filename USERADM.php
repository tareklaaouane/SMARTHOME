<?php
session_start();

if(!isset($_SESSION["id"])){

    header("location:index.php");
}
elseif(($_SESSION["type"])!="admin"){

  header("location:error404.php");
}


?>




<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet"><link rel="stylesheet" href="./style1.css">

<a href="./logout.php" class="logo" target="_self">
    <img src="./logout.png" alt="">
</a>


  <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
  <label for="menu-icon"></label>
  <nav class="nav"> 		
      <ul class="pt-5">
          <li><a href="./adduser.php">ADD USER</a></li>
          <li><a href="./deleteuser.php">DELETE USER</a></li>
          <li><a href="./modifyuser.php">MODIFY USER</a></li>
          <li><a href="./consultuser.php">CONSULT USER</a></li>
      </ul>
  </nav>

  <div class="section-center">
    <h1 class="mb-0"> ADMIN : user section</h1>
  </div>