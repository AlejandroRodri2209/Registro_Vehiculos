<?php
require 'conexion.php';

$id = $_GET['id'];

$stmt = $conexion->prepare("DELETE FROM registros WHERE id = ?");
$stmt->execute([$id]);

header("Location: index.php");
?>
