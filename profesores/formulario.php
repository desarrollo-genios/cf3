<?php
$documento  = '';
$nombre  = '';
$materia  = '';
$sueldo  = '';
$operacion  = 'guardar';
$readonly  = '';

if($_GET['documento']){ 
    $documento  = $_GET['documento']; 
    $operacion='actualizar';
    $readonly='readonly';
}
if($_GET['nombre']){ $nombre  = $_GET['nombre']; }
if($_GET['materia']){ $materia  = $_GET['materia']; }
if($_GET['sueldo']){ $sueldo  = $_GET['sueldo']; }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include '../menu.php'?>
    <div class="container">
        <form action="operaciones.php?operacion=<?php echo $operacion?>" method="post">
            <label>Documento</label>
            <input type="text" <?php echo $readonly?> name="documento" class="form-control" value="<?php echo $documento?>">
            <br>
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre?>">
            <br>
            <label>materia</label>
            <input type="text" name="materia" class="form-control" value="<?php echo $materia?>">
            <br>
            <label>sueldo</label>
            <input type="number" name="sueldo" class="form-control" value="<?php echo $sueldo?>">
            <br>
            <input type="submit" class="btn btn-warning" value="<?php echo ucfirst($operacion);?>">
        </form>
    </div>
</body>
</html>
