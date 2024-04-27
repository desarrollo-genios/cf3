<?php
$db = new PDO('mysql:host=localhost;dbname=cf3','root','');
$operacion = $_REQUEST['operacion'];
+
if($operacion=='eliminar'){
    $documento  = $_REQUEST['documento'];
}
else{
    $documento  = $_REQUEST['documento'];
    $nombre     = $_REQUEST['nombre'];
    $carrera    = $_REQUEST['carrera'];
    $semestre   = $_REQUEST['semestre'];
}

switch($operacion){
    case 'guardar':   
        $db->query("INSERT INTO estudiantes VALUES('$documento','$nombre','$carrera',$semestre);");
        break;
    case 'actualizar':
        $db->query("UPDATE estudiantes SET nombre='$nombre',carrera='$carrera',semestre=$semestre WHERE documento='$documento'");
        break;
    case 'eliminar':
        $db->query("DELETE FROM estudiantes WHERE documento='$documento'");
        break;
}

header("location:index.php");
?>