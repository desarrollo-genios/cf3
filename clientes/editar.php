<?php
$documento  = $_GET['documento'];
$nombre     = $_GET['nombre'];
$ciudad     = $_GET['ciudad'];
$edad       = $_GET['edad'];
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
        <form action="actualizar.php" method="post">
            <label>Documento</label>
            <input type="text" readonly name="documento" class="form-control" value="<?php echo $documento?>">
            <br>
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $nombre?>">
            <br>
            <label>Ciudad</label>
            <input type="text" name="ciudad" class="form-control" value="<?php echo $ciudad?>">
            <br>
            <label>Edad</label>
            <input type="number" name="edad" class="form-control" value="<?php echo $edad?>">
            <br>
            <input type="submit" class="btn btn-warning" value="Actualizar">
        </form>
    </div>
</body>
</html>
