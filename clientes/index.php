<?php
$db = new PDO('mysql:host=localhost;dbname=cf3','root','');
$clientes = $db->query("SELECT * FROM clientes")->fetchAll(PDO::FETCH_OBJ);
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
                <th>Ciudad</th>
                <th>Edad</th>
                <th>Opciones</th>
            </tr>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?php echo $cliente->documento;?></td>
                    <td><?php echo $cliente->nombre;?></td>
                    <td><?php echo $cliente->ciudad;?></td>
                    <td><?php echo $cliente->edad;?></td>
                    <td>
                        <a href="editar.php?documento=<?php echo $cliente->documento?>&nombre=<?php echo $cliente->nombre?>&ciudad=<?php echo $cliente->ciudad?>&edad=<?php echo $cliente->edad?>">
                            <i class="bi bi-pencil"></i>
                        </a>

                        <a href="eliminar.php?documento=<?php echo $cliente->documento;?>">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>
        </table>
        <a href="nuevo.html" class="btn btn-info">Nuevo cliente</a>
    </div>
</body>
</html>






