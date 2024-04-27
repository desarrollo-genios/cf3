<?php

$documento  = $_GET['documento'];
$db = new PDO('mysql:host=localhost;dbname=cf3','root','');
$db->query("DELETE FROM clientes WHERE documento='$documento'");
header("location:index.php");

?>