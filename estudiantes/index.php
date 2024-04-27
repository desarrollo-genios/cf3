<?php
$db = new PDO('mysql:host=localhost;dbname=cf3','root','');
$estudiantes = $db->query("SELECT * FROM estudiantes")->fetchAll(PDO::FETCH_OBJ);
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
    <div class="container">
        <table class="table table-hover table-dark">
            <tr>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Carrera</th>
                <th>Semestre</th>
                <th>Opciones</th>
            </tr>
            <?php foreach ($estudiantes as $estudiante): ?>
                <tr>
                    <td><?php echo $estudiante->documento;?></td>
                    <td><?php echo $estudiante->nombre;?></td>
                    <td><?php echo $estudiante->carrera;?></td>
                    <td><?php echo $estudiante->semestre;?></td>
                    <td>
                        <a href="editar.php?documento=<?php echo $estudiante->documento?>&nombre=<?php echo $estudiante->nombre?>&carrera=<?php echo $estudiante->carrera?>&semestre=<?php echo $estudiante->semestre?>">
                            <i class="bi bi-pencil"></i>
                        </a>

                        <a href="operaciones.php?operacion=eliminar&documento=<?php echo $estudiante->documento;?>">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
        <a href="nuevo.html" class="btn btn-info">Nuevo estudiante</a>
    </div>
</body>
</html>






