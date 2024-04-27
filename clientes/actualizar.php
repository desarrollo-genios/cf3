<?php

$documento  = $_POST['documento'];
$nombre     = $_POST['nombre'];
$ciudad     = $_POST['ciudad'];
$edad       = $_POST['edad'];

$db = new PDO('mysql:host=localhost;dbname=cf3','root','');

$db->query("UPDATE clientes SET nombre='$nombre',ciudad='$ciudad',edad=$edad WHERE documento='$documento'");

header("location:index.php");

?>