<?php
session_start();

if(!isset($_SESSION["id"])){

    header("location:index.php");
}

?>
<?php
include 'connectdb.php';



    $sql="select * from DATACAP ";
    $result=mysqli_query($conn,$sql);

    
//ID_MOTE	IP_ADD	ID_EMP	


            // output data of each row
          
          ?>
          <table border=1>
          <tr><td>ID_DCAP</td><td>VALCAP</td><td>DESCR</td><td>DCAP</td></tr>
          <?php
    
    while($row=mysqli_fetch_array($result)){   
     echo "<tr><td>" . $row["ID_DCAP"] . "</td>";
    echo "<td>" . $row["VALCAP"] . "</td>";
   echo "<td>" . $row["DESCR"] . "</td>";
    echo "<td>" .$row["DCAP"]. "</td> </tr>";}

 
?>
</table>