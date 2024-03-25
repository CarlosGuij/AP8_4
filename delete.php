<?php
require_once 'clases/Modelo.php';

if (isset($_GET['id'])) {
    $modelo = new Modelo();
    $modelo->deleteTarea($_GET['id']);
    header("Location: lista.php");
    exit();
}
?>
