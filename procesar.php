<?php
require 'conexion.php';

$vehiculo = $_POST['vehiculo'];
$propietario = $_POST['propietario'];
$fecha_registro = $_POST['fecha_registro'];
$estado_registro = $_POST['estado_registro'];

$stmt = $conexion->prepare("INSERT INTO registros (vehiculo, propietario, fecha_registro, estado_registro) VALUES (?, ?, ?, ?)");
$stmt->execute([$vehiculo, $propietario, $fecha_registro, $estado_registro]);

header("Location: index.php");
?>
