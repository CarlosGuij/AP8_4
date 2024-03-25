<?php 
require_once("clases/Modelo.php");


if (isset($_GET['action']) && $_GET['action'] === 'borrar' && isset($_GET['id'])) {
    $modelo = new Modelo();
    $modelo->deleteTarea($_GET['id']);
    header("Location: index.php");
    exit();
}


$modelo = new Modelo();

$tasks = $modelo->getAllTasks();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<center><h1>Lista de Tareas</h1></center>
<div>
        <center><a href="nueva.php?action=agregar"><img src='form/add.jpg' width='50'></a></center>
    </div>
    <br>
<center><table class="greenTable" border="1"></center>
    <thead>
        <tr>
            <th>ID</th>
            <th>título</th>
            <th>Fecha_Creacion</th>
            <th>Fecha_Vencimiento</th>
            <th>Delete</th>
            <th>Modify</th>
        </tr>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= $task['id'] ?></td>
                <td><a href="detalle.php?id=<?= $task['id'] ?>"><?= $task['titulo'] ?></a></td>
                <td><?= $task['fecha_creacion'] ?></td>
                <td><?= $task['fecha_vencimiento'] ?></td>
                <td>
                    <a href="delete.php?action=borrar&id=<?= $task['id'] ?>"><img src='form/del_icon.png' width='30'></a>
                <td>  
                    <a href="modifica.php?action=modificar&id=<?= $task['id'] ?>"><img src='form/edit.png' width='30'></a>
                </td>
        </td>
            </tr>
        <?php endforeach; ?>
    </table>
</center>
<?php
    echo $modelo->showNavigation();
?>
</body>
</html>

