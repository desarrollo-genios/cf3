<?php
$documento  = $_GET['documento'];
$nombre     = $_GET['nombre'];
$carrera     = $_GET['carrera'];
$semestre       = $_GET['semestre'];
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
    <div class="container">
        <form action="operaciones.php?operacion=actualizar" method="post">
            <label>Documento</label>
            <input type="text" readonly name="documento" class="form-control" value="<?php echo $documento?>">
            <br>
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre?>">
            <br>
            <label>Carrera</label>
            <input type="text" name="carrera" class="form-control" value="<?php echo $carrera?>">
            <br>
            <label>Semestre</label>
            <input type="number" name="semestre" class="form-control" value="<?php echo $semestre?>">
            <br>
            <input type="submit" class="btn btn-warning" value="Actualizar">
        </form>
    </div>
</body>
</html>
