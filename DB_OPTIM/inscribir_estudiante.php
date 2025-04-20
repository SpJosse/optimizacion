<?php
include 'config.php';

$estudiantes = $pdo->query("SELECT * FROM Estudiante")->fetchAll();
$materias = $pdo->query("SELECT * FROM materia")->fetchAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $estudiante_id = $_POST['estudiante_id'];
    $materia_codigo = $_POST['materia_codigo'];
    $fecha_inscripcion = $_POST['fecha_inscripcion'];

    $sql = "INSERT INTO Inscripcion (estudiante_id, materia_codigo, fecha_inscripcion) 
            VALUES (:estudiante_id, :materia_codigo, :fecha_inscripcion)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':estudiante_id', $estudiante_id);
    $stmt->bindParam(':materia_codigo', $materia_codigo);
    $stmt->bindParam(':fecha_inscripcion', $fecha_inscripcion);

    if ($stmt->execute()) {
        $mensaje = "Estudiante inscrito exitosamente.";
    } else {
        $mensaje = "Error al inscribir al estudiante.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inscripción de Estudiante</title>
    <link rel="stylesheet" href="css/inscribir.css">
</head>
<body>
    <div class="form-container">
        <h2>Inscripción de Estudiante</h2>

        <?php if (isset($mensaje)): ?>
            <div class="mensaje"><?= htmlspecialchars($mensaje) ?></div>
        <?php endif; ?>

        <form method="POST" action="inscribir_estudiante.php">
            <div class="form-group">
                <label for="estudiante_id">Estudiante</label>
                <select name="estudiante_id" id="estudiante_id" required>
                    <option value="" disabled selected>Seleccione un estudiante</option>
                    <?php foreach ($estudiantes as $estudiante): ?>
                        <option value="<?= $estudiante['ID']; ?>"><?= htmlspecialchars($estudiante['nombre']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="materia_codigo">Materia</label>
                <select name="materia_codigo" id="materia_codigo" required>
                    <option value="" disabled selected>Seleccione una materia</option>
                    <?php foreach ($materias as $materia): ?>
                        <option value="<?= $materia['codigo']; ?>"><?= htmlspecialchars($materia['nombre']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="fecha_inscripcion">Fecha de Inscripción</label>
                <input type="date" name="fecha_inscripcion" id="fecha_inscripcion" required>
            </div>

            <button type="submit">Inscribir Estudiante</button>
        </form>
    </div>
</body>
</html>
