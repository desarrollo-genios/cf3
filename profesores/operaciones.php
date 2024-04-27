<?php
$db = new PDO('mysql:host=localhost;dbname=cf3','root','');
$operacion = $_REQUEST['operacion'];

if($operacion=='eliminar'){
    $documento  = $_REQUEST['documento'];
}
else{
    $documento  = $_REQUEST['documento'];
    $nombre     = $_REQUEST['nombre'];
    $materia    = $_REQUEST['materia'];
    $sueldo     = $_REQUEST['sueldo'];
}

switch($operacion){
    case 'guardar':   
        $db->query("INSERT INTO profesores VALUES('$documento','$nombre','$materia',$sueldo);");
        break;
    case 'actualizar':
        $db->query("UPDATE profesores SET nombre='$nombre',materia='$materia',sueldo=$sueldo WHERE documento='$documento'");
        break;
    case 'eliminar':
        $db->query("DELETE FROM profesores WHERE documento='$documento'");
        break;
}

header("location:index.php");
?>