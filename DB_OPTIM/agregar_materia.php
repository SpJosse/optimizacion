<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];

    $sql = "INSERT INTO Materia (nombre) VALUES (:nombre)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);

    if ($stmt->execute()) {
        $mensaje = "Materia agregada exitosamente.";
    } else {
        $mensaje = "Error al agregar la materia.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Materia</title>
    <link rel="stylesheet" href="css/materia.css">
</head>
<body>
    <div class="container">
        <h3>Registro de Cursos</h3>

        <?php if (isset($mensaje)): ?>
            <div class="mensaje"><?= htmlspecialchars($mensaje) ?></div>
        <?php endif; ?>

        <form method="POST" action="agregar_materia.php">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <input type="submit" value="Agregar Materia">
        </form>
    </div>
</body>
</html>
