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
    $ID_MOTE=$_POST["ID_MOTE"];

    $sql="select * from MOTE where ID_MOTE = '".$ID_MOTE."'";
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);
//ID_MOTE	IP_ADD	ID_EMP	

    if(count($row)>0){
        {
            // output data of each row
          
          ?>
          <table border=1>
          <tr><td>id mote</td><td>IP adress</td><td>id EMPlACEMENT</td><td>managment</td></tr>
          <?php
    }
    echo "<tr><td>" . $row["ID_MOTE"] . "</td>";
    echo "<td>" . $row["IP_ADD"] . "</td>";
   echo "<td>" . $row["ID_EMP"] . "</td>";
    echo '<td> <a href="deletemote.php">delete       </a>';
    echo "<br>";
 echo '<a href="modifymote.php">modify       </a>'. "</td> </tr>";
   }
 } else {
   echo "0 results";
 }
?>