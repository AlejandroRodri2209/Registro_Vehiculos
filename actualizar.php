<?php
require 'conexion.php';

$id = $_POST['id'];
$vehiculo = $_POST['vehiculo'];
$propietario = $_POST['propietario'];
$fecha_registro = $_POST['fecha_registro'];
$estado_registro = $_POST['estado_registro'];

$stmt = $conexion->prepare("UPDATE registros SET vehiculo = ?, propietario = ?, fecha_registro = ?, estado_registro = ? WHERE id = ?");
$stmt->execute([$vehiculo, $propietario, $fecha_registro, $estado_registro, $id]);

header("Location: index.php");
?>
