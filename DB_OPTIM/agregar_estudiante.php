<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $curso = $_POST['curso'];

    $sql = "INSERT INTO Estudiante (nombre, curso) VALUES (:nombre, :curso)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':curso', $curso);

    if ($stmt->execute()) {
        $mensaje = "Estudiante agregado exitosamente.";
    } else {
        $mensaje = "Error al agregar el estudiante.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Estudiante</title>
    <link rel="stylesheet" href="css/estudiante.css">
</head>
<body>
    <div class="container">
        <h3>Registro de Estudiantes</h3>
        <?php if (isset($mensaje)): ?>
            <div class="mensaje"><?= htmlspecialchars($mensaje) ?></div>
        <?php endif; ?>

        <form method="POST" action="agregar_estudiante.php">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="curso">Curso:</label>
            <input type="text" name="curso" id="curso" required>

            <input type="submit" value="Agregar Estudiante">
        </form>
    </div>
</body>
</html>
