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
    $ID_USR=$_POST["ID_USR"];

    $sql="select * from USR where ID_USR = '".$ID_USR."'";
    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);
//ID_MOTE	IP_ADD	ID_EMP	

    if(count($row)>0){
        {
            // output data of each row
          
          ?>
          <table border=1>
          <tr><td>id USER</td><td>NAME USER</td><td>TYPE</td><td>managment</td></tr>
          <?php
    }
    echo "<tr><td>" . $row["ID_USR"] . "</td>";
    echo "<td>" . $row["NAMEUSE"] . "</td>";
   echo "<td>" . $row["TYPEUSE"] . "</td>";
    echo '<td> <a href="deleteuser.php">delete       </a>';
    echo "<br>";
 echo '<a href="modifyuser.php">modify       </a>'. "</td> </tr>";
   }
 } else {
   echo "0 results";
 }
?>