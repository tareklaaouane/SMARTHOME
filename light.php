<?php
$pin=$_POST["pin"];
$action=$_POST["action"];
$commande="python3 led.py ".$pin." ".$action;
echo $commande;
$output = shell_exec($commande);
echo "<pre>$output</pre>";
?>
