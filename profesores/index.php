<?php
$db = new PDO('mysql:host=localhost;dbname=cf3','root','');
$profesores = $db->query("SELECT * FROM profesores")->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <?php include '../menu.php'?>

    <div class="container">
        <table class="table table-hover table-dark">
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>materia</th>
                <th>sueldo</th>
                <th>Opciones</th>
            </tr>
            <?php foreach ($profesores as $profesor): ?>
                <tr>
                    <td><?php echo $profesor->documento;?></td>
                    <td><?php echo $profesor->nombre;?></td>
                    <td><?php echo $profesor->materia;?></td>
                    <td><?php echo $profesor->sueldo;?></td>
                    <td>
                        <a href="formulario.php?documento=<?php echo $profesor->documento?>&nombre=<?php echo $profesor->nombre?>&materia=<?php echo $profesor->materia?>&sueldo=<?php echo $profesor->sueldo?>">
                            <i class="bi bi-pencil"></i>
                        </a>

                        <a href="operaciones.php?operacion=eliminar&documento=<?php echo $profesor->documento;?>">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
        <a href="formulario.php" class="btn btn-info">Nuevo profesor</a>
    </div>
</body>
</html>






