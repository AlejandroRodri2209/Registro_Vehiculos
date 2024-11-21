<?php
require 'conexion.php';

$id = $_GET['id'];
$stmt = $conexion->prepare("SELECT * FROM registros WHERE id = ?");
$stmt->execute([$id]);
$registro = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h2 class="text-center">Editar Registro de Vehículo</h2>
    <form action="actualizar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $registro['id']; ?>">
        <div class="mb-3">
            <label for="vehiculo" class="form-label">Vehículo</label>
            <input type="text" class="form-control" id="vehiculo" name="vehiculo" value="<?php echo $registro['vehiculo']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="propietario" class="form-label">Propietario</label>
            <input type="text" class="form-control" id="propietario" name="propietario" value="<?php echo $registro['propietario']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="fecha_registro" class="form-label">Fecha de Registro</label>
            <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" value="<?php echo $registro['fecha_registro']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="estado_registro" class="form-label">Estado del Registro</label>
            <select class="form-select" id="estado_registro" name="estado_registro">
                <option value="activo" <?php echo $registro['estado_registro'] == 'activo' ? 'selected' : ''; ?>>Activo</option>
                <option value="inactivo" <?php echo $registro['estado_registro'] == 'inactivo' ? 'selected' : ''; ?>>Inactivo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
</body>
</html>
