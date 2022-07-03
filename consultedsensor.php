<?php
session_start();

if(!isset($_SESSION["id"])){

    header("location:index.php");
}
elseif(($_SESSION["type"])!="admin"){

  header("location:error404.php");
}


include 'connectdb.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ID_CAPT=$_POST["ID_CAPT"];

    $sql="select * from CAPTEUR where ID_CAPT = '".$ID_CAPT."'";
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);
//ID_MOTE	IP_ADD	ID_EMP	

    if(count($row)>0){
        {
            // output data of each row
          
          ?>
          <table border=1>
          <tr><td>id CAPTEUR</td><td>NAME CAPTEUR</td><td>TYPE</td><td>MOTE ID</td><td>managment</td></tr>
          <?php
    }
    echo "<tr><td>" . $row["ID_CAPT"] . "</td>";
    echo "<td>" . $row["NOM"] . "</td>";
   echo "<td>" . $row["TYPEC"] . "</td>";
   echo "<td>" . $row["ID_MOTE"] . "</td>";
    echo '<td> <a href="deletesensor.php">delete       </a>';
    echo "<br>";
 echo '<a href="modifysensor.php">modify       </a>'. "</td> </tr>";
   }
 } else {
   echo "0 results";
 }
?>