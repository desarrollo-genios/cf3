<?php

$documento  = $_POST['documento'];
$nombre     = $_POST['nombre'];
$ciudad     = $_POST['ciudad'];
$edad       = $_POST['edad'];

$db = new PDO('mysql:host=localhost;dbname=cf3','root','');

$db->query("INSERT INTO clientes VALUES('$documento','$nombre','$ciudad',$edad);");

header("location:listar.php");

?>