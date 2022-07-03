
<?php
session_start();

if(!isset($_SESSION["id"])){

    header("location:index.php");
}
if($_SESSION["type"] != "admin" ){
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
          <li><a href="./USERADM.php">USER</a></li>
          <li><a href="./sensorADM .php">SENSOR</a></li>
          <li><a href="./MOTEADM.php">MOTE</a></li>
          <li><a href="./control.php">CONTROL</a></li>
          <li><a href="./VISUALIZE.PHP">VISUALIZE</a></li>
      </ul>
  </nav>

  <div class="section-center">
      <h1 class="mb-0">HELLO ADMIN</h1>
  </div>